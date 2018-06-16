#include <SoftwareSerial.h>
 
//SIM800 TX is connected to Arduino D8
#define SIM800_TX_PIN 10
 
//SIM800 RX is connected to Arduino D7
#define SIM800_RX_PIN 11
#define ARRAY_SIZE 300
#define DEBUG true
 
//Create software serial object to communicate with SIM800
SoftwareSerial serialSIM808(SIM800_TX_PIN,SIM800_RX_PIN);
 

#define DEFAULT_TIMEOUT          5   //seconds
#define DEFAULT_INTERCHAR_TIMEOUT 1500   //miliseconds

int type = 0;
char * out = (char *)malloc (ARRAY_SIZE *sizeof(char));

 char * result;
//char out[300];

 String response = "",lat = "",lon = "";

//GPS
//------------------------------------------------
void sendData(String command, const int timeout, boolean debug){
    response = "",lat = "",lon = "";    
    serialSIM808.println(command); 
    delay(5);
    if(debug){
    long int time = millis();   
    while( (time+timeout) > millis()){
      while(serialSIM808.available()){       
        response += char(serialSIM808.read());
      }  
    }    
    if(command.equals("AT+CGNSINF")){
      //Serial.print(response);
      int from=-1,to=-1,count=0;
      for(int i=0;i<response.length();i++){
        if(response[i]==','){
          if(from!=-1){
            count++;
            to = i;
            if(count==3) lat = response.substring(from+1, to);
            if(count==4) lon = response.substring(from+1, to);
            from = to;
          }else{
            from = i+2;
          }
        }
      }
      
      //Serial.println(lat);
      //Serial.println(lon);
    }
   }    
}

void getgps(void){
   sendData( "AT+CGNSPWR=1",1000,true); 
   sendData( "AT+CGPSINF=0",1000,true); 
}

void offgps(void){
  sendData( "AT+CGNSPWR=0",1000,true);
}



//------------------------------------------------


 void sim808_send_cmd(const char* cmd);
 int sim808_check_readable();
 void sim808_send_byte(uint8_t data);

void sim808_clean_buffer(char * out)
{
int  count = ARRAY_SIZE;
    for(int i=0; i < count; i++) {
        out[i] = '\0';
    }
}

char * read_input()
{

    int i = 0,count=ARRAY_SIZE;
    unsigned long timerStart, prevChar;
    timerStart = millis();
    prevChar = 0;
    
    sim808_clean_buffer(out);
    delay(200);
    sim808_send_cmd("AT+HTTPREAD\r\n");
    //delay(200);
    while(1) {
        while (sim808_check_readable()) {
            char c = (char)serialSIM808.read();
            //Serial.print(c);
            prevChar = millis();
            out[i++] = c;
            if(i >= count)break;
        }
        if(i >= count)break;
        if ((unsigned long) (millis() - timerStart) > DEFAULT_TIMEOUT * 1000UL) {
            Serial.println("Default time out");
            break;
        }
        //If interchar Timeout => return FALSE. So we can return sooner from this function. Not DO it if we dont recieve at least one char (prevChar <> 0)
        if (((unsigned long) (millis() - prevChar) > DEFAULT_INTERCHAR_TIMEOUT) && (prevChar != 0)) {
            Serial.println("Default interchar time out");
            break;
        }
    }
    out[i] = '\0';
    
    
   
   return out;
}

void sim808_flush_serial()
{
  //Serial.println("call : sim808_flush_serial");
    while(sim808_check_readable()){
        serialSIM808.read();
    }
}

int sim808_check_readable()
{
    return serialSIM808.available();
}

boolean sim808_wait_for_resp(const char* resp)
{
  //Serial.println("call : sim808_wait_for_resp");
    int len = strlen(resp);
    int sum = 0;
    unsigned long timerStart, prevChar;    //prevChar is the time when the previous Char has been read.
    timerStart = millis();
    prevChar = 0;
    while(1) {
        if(sim808_check_readable()) {
            char c = (char)serialSIM808.read();
            //Serial.print(c);
            prevChar = millis();
            sum = (c==resp[sum]) ? sum+1 : 0;
            if(sum == len)break;
        }
        if ((unsigned long) (millis() - timerStart) > DEFAULT_TIMEOUT  * 1000UL) {
            return false;
        }
        //If interchar Timeout => return FALSE. So we can return sooner from this function.
        if (((unsigned long) (millis() - prevChar) > DEFAULT_INTERCHAR_TIMEOUT) && (prevChar != 0)) {
            return false;
        }

    }
    //If is a CMD, we will finish to read buffer.
    if(type == 0) sim808_flush_serial();
    return true;
}




//check 
    boolean sim808_check_with_cmd(const char* cmd, const char *resp){
      //Serial.println("call : sim808_check_with_cmd");
      sim808_send_cmd(cmd);
      return sim808_wait_for_resp(resp);
    }

void sim808_send_cmd(const char* cmd)
{
  //Serial.println("call : sim808_send_cmd");
  for(uint16_t i=0; i<strlen(cmd); i++)
    {
        //Serial.println(cmd[i]);
        sim808_send_byte(cmd[i]);
    }
}

void sim808_send_byte(uint8_t data)
{
  //Serial.println("call : sim808_send_byte");
  //Serial.println((char)data);
  serialSIM808.write((char)data);
}

boolean gprs_on(){
  //check at command
    if(!sim808_check_with_cmd("AT\r\n","OK\r\n")){   
      Serial.println("Error: AT");
    return false;
    }
    delay(200);
    if(!sim808_check_with_cmd("AT+CREG?\r\n","+CREG: 0,1\r\n\r\nOK")){   
      //Serial.println("Error: AT+CREG?\r\n");
      return false;
    }
    delay(200);
    // Attach to GPRS
    if(!sim808_check_with_cmd("AT+CGATT=1\r\n","OK\r\n")){   
      //Serial.println("Error: CGATT=1");
    return false;
    }
    delay(200);
    // Open a GPRS context
    if(!sim808_check_with_cmd("AT+SAPBR=1,1\r\n","OK\r\n")){   
      //Serial.println("Error: SAPBR=1,1");
    return false;
    }
    delay(200);
      //Serial.println("success : GPRS on"); 
      return true;
}

boolean gprs_off(){
  //gprs_off
  delay(200);
  if(!sim808_check_with_cmd("AT+CGATT=0\r\n","DEACT\r\n\r\nOK\r\n")){   
      //Serial.println("Error: CGATT=0");
    return false;
    }
    //Serial.println("gprs off");
    return true;
}

boolean send_data(const char * url){

   // Initialize HTTP
  if(!sim808_check_with_cmd("AT+HTTPINIT\r\n","OK\r\n")){   
      //Serial.println("Error: HTTPINIT");
      sim808_check_with_cmd("AT+HTTPTERM\r\n","OK\r\n");
    return false;
  }
  delay(200);
  //Serial.println(url);
  const char * tmp = url;
  int i=0;
  Serial.println("Print url : ");
  while(tmp[i]){
    //charBuf[j] = tmp[i];
    Serial.print(tmp[i]);
    i++;
    //j++;
  }

  //send data on url
  if(!sim808_check_with_cmd(url,"OK\r\n")){   
      //Serial.println("Error: url");
    return false;
  }
  delay(200);
  // End the PARA
  if(!sim808_check_with_cmd("AT+HTTPPARA=\"CID\",1\r\n","OK\r\n")){   
      //Serial.println("Error: End PARA");
    return false;
  }
  delay(200);
  //send request
  if(!sim808_check_with_cmd("AT+HTTPACTION=0\r\n","ok\r\n+HTTPACTION: 0,200,645\r\n")){   
      //Serial.println("Error: send request");
    //return false;
  }
  delay(200);
  read_input();
  delay(200);
 result = read_input();
  
 delay(200);
  if(!sim808_check_with_cmd("AT+HTTPTERM\r\n","OK\r\n")){   
      //Serial.println("Error: HTTPTERM");
    //return false;
  }
  delay(200);
  Serial.println("Data sent complete");
  return true;
}

boolean myData(const char * url){
  //Serial.println(url);
  
  //char * tmp = (char *) malloc (sizeof(char) * 300);
  //url.toCharArray(tmp1, 300) ;
  //char * tmp = &tmp1;
  
  
  sim808_clean_buffer(out);
  Serial.println("Sending......");
   if(gprs_on()){
    if(!send_data(url)){
      gprs_off();
      //Serial.println("Not sent data");
      return false;
    }
    gprs_off();
    return true;
  }else{
    gprs_off();
    //Serial.println("Not on gprs");
    return false;
  }
}

#include <Keypad.h> //keypad library
#include <EEPROM.h> //rom library for save data
#include <LiquidCrystal.h> //lcd
#include <DS3232RTC.h>  
#include "sim808.h"
#include "gsmFun.h"
#include "romFun.h"

time_t myTime,nextTime;

//current sensor 
const int sensorIn = 0;
int mVperAmp = 100; // use 100 for 20A Module and 66 for 30A Module and 185 for 5A
double power = 0;
double unit = 0;
double Voltage = 0;
double VRMS = 0;
double AmpsRMS = 0;
double offset = 0.086-0.019;

String time_server = "";
String proServer = "";
char combined_serever[32] = {0};

void setServerAndTime(String result){
   char * tmp_result = (char *)malloc (200 *sizeof(char));
   result.toCharArray(tmp_result,200);
   int i = 0;
    while(tmp_result[i+1]){
      if(tmp_result[i] == 'o' && tmp_result[i+1] == 'k'){
        //get prov server name
        char proServer[14] = {};
        proServer[13] = '\0';
        int j = 0;
        i =  i + 3;
        for(j=0;j<13;j++){
          proServer[j] = tmp_result[i];
          i++;
        }
        //print server name
        j=0;
        
        String sname = "";
        Serial.println("Server name : ");
        //for(j=0;j<13;j++){
        while(proServer[j]){
          
          sname += proServer[j];
          Serial.print(proServer[j]);
          j++;
        }
        Serial.println();
        
        //get time
        i++;
        char serverTime[20] = {};
        serverTime[19] = '\0';
        for(j=0;j<19;j++){
          serverTime[j] = tmp_result[i];
          i++;
        }
        j=0;
        while(serverTime[j]){
          Serial.print(serverTime[j]);
          j++;
        }

        char tmp_time[5];
        int server_day,server_month,server_year,server_h,server_m,server_s;
        tmp_time[0] = serverTime[0];
        tmp_time[1] = serverTime[1];
        tmp_time[2] = '\0';
        server_day = atoi(tmp_time);
        Serial.println();
        Serial.println(server_day);
        tmp_time[0] = serverTime[3];
        tmp_time[1] = serverTime[4];
        tmp_time[2] = '\0';
        server_month = atoi(tmp_time);
        Serial.println(server_month);
        tmp_time[0] = serverTime[6];
        tmp_time[1] = serverTime[7];
        tmp_time[2] = serverTime[8];
        tmp_time[3] = serverTime[9];
        tmp_time[4] = '\0';
        server_year = atoi(tmp_time);
        Serial.println(server_year);
        
        tmp_time[0] = serverTime[11];
        tmp_time[1] = serverTime[12];
        tmp_time[2] = '\0';
        server_h = atoi(tmp_time);
        Serial.println(server_h);

        tmp_time[0] = serverTime[14];
        tmp_time[1] = serverTime[15];
        tmp_time[2] = '\0';
        server_m = atoi(tmp_time);
        Serial.println(server_m);

        tmp_time[0] = serverTime[17];
        tmp_time[1] = serverTime[18];
        tmp_time[2] = '\0';
        server_s = atoi(tmp_time);
        Serial.println(server_s);

        setTimeDevice(server_year,server_month,server_day,server_s,server_m,server_h);

        
        writeServerNameOnRom(sname);
        
        strcat(combined_serever, getServerName());
        Serial.println();
        j=0;
        while(combined_serever[j]){
          Serial.print(combined_serever[j]);
          j++;
        }
      }
      i++;
    }
}

void sendUnit(char * id , char * pwd , char * preData , char * newData){
  //char one[60] = getServerName();
  char two[] = "&password=";
  char three[] = "&time=";
  char four[] = "&preData=";
  char five[] = "&newData=";
  char six[] = "\"\r\n";
  char combinr_url[320] = {0};

  strcat(combinr_url, getServerName());
  strcat(combinr_url, id);
  strcat(combinr_url, two);
  strcat(combinr_url, pwd);
  strcat(combinr_url, three);
  time_t t = RTC.get();
  char buff[30]={};
  buff[0]={'\0'};
  char tim[20];

  itoa(year(t),tim,10);
  strcat(buff, tim);

  buff[4] = '-';
  itoa(month(t),tim,10);
  if(month(t)<10){
    buff[5] = '0';  
    }
    else{
    }
  strcat(buff, tim);
  buff[7] = '-';
  itoa(day(t),tim,10);
  if(day(t)<10){
    buff[8] = '0';  
    }
    else{
    }  
  strcat(buff, tim);
  buff[10] = '%';
  buff[11] = '2';
  buff[12] = '0';
  itoa(hour(t),tim,10);
  if(hour(t)<10){
    buff[13] = '0';  
    }
    else{
    }  
  strcat(buff, tim);
  buff[15] = ':';
  itoa(minute(t),tim,10);
  if(minute(t)<10){
    buff[16] = '0';  
    }
    else{
    }  
  strcat(buff, tim);
  buff[18] = ':';
  itoa(second(t),tim,10);
  if(second(t)<10){
    buff[19] = '0';  
    }
    else{
    }   strcat(buff, tim);
    buff[21] = '\0';
    
    int l=0;
  while(buff[l]){
    Serial.println(buff[l]);
    l++;
  }
  
 // Serial.println(year(t));
  strcat(combinr_url, buff);
  strcat(combinr_url, four);
  strcat(combinr_url, preData);
  strcat(combinr_url, five);
  strcat(combinr_url, newData);
  strcat(combinr_url, six);

  int c=0;
  Serial.println("URL : ");
  while(combinr_url[c]){
    Serial.print(combinr_url[c]);
    c++;
  }
  

  char * url = combinr_url;

  while( !myData(url));
 
  Serial.println("DATA : --------------------------");
  Serial.println(result);
  Serial.println("---------------------------------");
  if(resultCompare(result,"ok")) {
    Serial.println("Unit sussesfully uploaded");
  }
  
}

void setTimeDevice(int sy,int sm,int sd,int s,int m,int h){
  tmElements_t tm;
  tm.Hour = h;             //set the tm structure to 23h31m30s on 13Feb2009
  tm.Minute = m;
  tm.Second = s;
  tm.Day = sd;
  tm.Month = sm;
  tm.Year = sy - 1970;    //tmElements_t.Year is the offset from 1970
  RTC.write(tm);            //set the RTC from the tm structure
}

char *  getCurrentDate(){
  
  char buff[30]={};
  buff[0]={'\0'};
  char tim[20];

  time_t t =  RTC.get();

  itoa(year(t),tim,10);
  strcat(buff, tim);

  buff[4] = '-';
  itoa(month(t),tim,10);
  if(month(t)<10){
    buff[5] = '0';  
    }
    else{
    }
  strcat(buff, tim);
  buff[7] = '-';
  itoa(day(t),tim,10);
  if(day(t)<10){
    buff[8] = '0';  
    }
    else{
    }  
  strcat(buff, tim);
  return buff;
}

void displayTime(time_t t){
  //Serial.print("Hour : ");
  Serial.print(hour(t)); // Returns the hour for the given
  Serial.print(" : ");
 // time t
// Serial.print("Minute : ");
 Serial.print(minute(t)); // Returns the minute for the given
  Serial.print(" : ");
 // time t
// Serial.print("Seconds : ");
 Serial.print(second(t)); // Returns the second for the given
  Serial.print(" >> ");
 // time t 
 /*Serial.print("Milies : ");
 Serial.print(millis(t)); // Returns the millisecond for the given
 Serial.println();*/
 // time t 
 //Serial.print("Day : ");
 Serial.print(day(t)); // The day for the given time t
 Serial.println();
}



//get amp
float getVPP()
{
  float result;
  
  int readValue;             //value read from the sensor
  int maxValue = 0;          // store max value here
  int minValue = 1024;          // store min value here
  
   uint32_t start_time = millis();
   while((millis()-start_time) < 1000) //sample for 1 Sec
   {
       readValue = analogRead(sensorIn);
       // see if you have a new maxValue
       if (readValue > maxValue) 
       {
           /*record the maximum sensor value*/
           maxValue = readValue;
       }
       if (readValue < minValue) 
       {
           /*record the maximum sensor value*/
           minValue = readValue;
       }
   }
   
   // Subtract min from max
   result = ((maxValue - minValue) * 5.0)/1024.0;
      
   return result;
 }

//settup -keypad
const byte ROWS = 4; //four rows
const byte COLS = 4; //four columns

char keys[ROWS][COLS] = {
  {'1','2','3','A'},
  {'4','5','6','B'},
  {'7','8','9','C'},
  {'*','0','#','D'}
};

byte rowPins[ROWS] = {23, 25, 27, 29}; //connect to the row pinouts of the keypad
byte colPins[COLS] = {22, 24, 26, 28}; //connect to the column pinouts of the keypad

Keypad keypad = Keypad( makeKeymap(keys), rowPins, colPins, ROWS, COLS );

//rom 
int addr = 0;

// initialize the library by associating any needed LCD interface pin
// with the arduino pin number it is connected to
const int rs = 33, en = 31, d4 = 36, d5 = 34, d6 = 32, d7 = 30;
LiquidCrystal lcd(rs, en, d4, d5, d6, d7);

String inString = "";    // string to hold input id
String inStringP = ""; //string to hold password
int val = 0;


void checkState(){
   
      int state = EEPROM.read(11);
      //Serial.println(state);

      if(state == 1){
        lcd.clear();
        lcd.setCursor(2, 0); //setCursur(col,row)
        lcd.print("YOUR ACCOUNT");
        lcd.setCursor(5, 1); //setCursur(col,row)
        lcd.print("CLOSED");
        while(1);
      }
   
   
}

String getIdFromKeyboard(){
  val = EEPROM.read(0);
  Serial.println(val);

  Serial.print("Enter ID : ");
  byte a = 0;
  while (1) {
    char key = keypad.getKey();
    if(a==val){
      return inString;
    }
    if(key == 'D'){
      String tmp = inString;
      tmp[a-1] = '\0';
      inString = "";
      for(int i=0;i<tmp.length()-1;i++){
        inString += tmp[i];
      }
      
      a--;
      Serial.println(inString);
    }
    if (isDigit(key)) {
      inString += key;
      Serial.println(inString);
      a++;
    }
    lcd.setCursor(3, 1); //setCursur(col,row)
    lcd.print(inString);
  }
}


String getPasswordFromKeyboard(){
  val = 4;
  Serial.println(val);

  Serial.print("Enter Password : ");
  byte a = 0;
  while (1) {
    char key = keypad.getKey();
    if (isDigit(key)) {
      inStringP += key;
      Serial.println(inStringP);
      a++;
    }
    if(a==val){
      lcd.setCursor(3, 1); //setCursur(col,row)
      lcd.print(inStringP);
      Serial.println(inStringP);
      return inStringP;
    }
    lcd.setCursor(3, 1); //setCursur(col,row)
    lcd.print(inStringP);
  }
  writePasswordOnRom(inStringP);
}



void install(){
  lcd.begin(16, 2);
  lcd.setCursor(4, 0); //setCursur(col,row)
  lcd.print("WELCOME");
  delay(1000);
  
  String tmp = "";
  String inPass = "";

  checkState();
  
  for(int i=0;i<EEPROM.read(0);i++){
    tmp += '0';
    //Serial.println(getId());
  }

  if(tmp == getId()){
    lcd.clear();
    lcd.setCursor(1, 0); //setCursur(col,row)
    lcd.print("ENTER YOUR ID");
    inString = getIdFromKeyboard();

    delay(1000);

    lcd.clear();
    lcd.setCursor(1, 0); //setCursur(col,row)
    lcd.print("ENTER PASSWORD");
    inStringP = getPasswordFromKeyboard();
    
    if(isValidId(inString,inStringP)){
      writeIdOnRom(inString);
      lcd.clear();
      lcd.setCursor(4, 0); //setCursur(col,row)

      digitalWrite(8,LOW);

      inString = getId();
      inStringP = getPassword();
      
      lcd.print("SUCCESS");
    }else{
      lcd.clear();
      lcd.setCursor(3, 0); //setCursur(col,row)
      lcd.print("NOT VALID ID");
      inString = "";
      inStringP = "";
      install();
    }
  }else{
      lcd.clear();
      lcd.setCursor(7, 0); //setCursur(col,row)
      lcd.print("OK");
      lcd.setCursor(3, 1); //setCursur(col,row)
      lcd.print(getId());
      digitalWrite(8,LOW);

      if(readDisconnectInfo()){
        //if preveious time disconnected
        inString = getId();
        inStringP = getPassword();

        unit = readCurrentUnit();
        
        char id_buf[12] = "";
        char state[2] = "1";

        inString.toCharArray(id_buf, 12);
        disconnectData(id_buf , state);
      
        writeDisconnectInfo(0);
      }
      
  }
}

boolean isValidId(String s,String p){ //cheking id is valid -new account in server databse

   lcd.clear();
   lcd.setCursor(3, 0); //setCursur(col,row)
   lcd.print("Sending...");

   //getGPSCOR(s,p);  //get gps send data
   String lat = "7.257296";
   String lon = "80.602152";
    char * t_lat = (char *)malloc (20 *sizeof(char));
    lat.toCharArray(t_lat,20);
    char * t_lon = (char *)malloc (20 *sizeof(char));
    lon.toCharArray(t_lon,20);
    char * st = (char *)malloc (20 *sizeof(char));
    s.toCharArray(st,20);
    char * pt = (char *)malloc (20 *sizeof(char));
    p.toCharArray(pt,20);    
    Serial.println(p);
  int i=0;
  while(pt[i]){
    Serial.println(pt[i]);i++;
    }
  sendGPS(t_lat,t_lon,st,pt);
  
   boolean x = false;

   if(resultCompare(result,"ok")) {
    Serial.println("Data sussesfully uploaded");
    //fun get time & provincial server name
    setServerAndTime(result);
    
    x = true;
  }else{
    Serial.println("result compare error");
   lcd.clear();
   lcd.setCursor(1, 0); //setCursur(col,row)
   lcd.print("Invalid User");    
  }
  
  if(x){
//   lcd.clear();
//   lcd.setCursor(3, 0); //setCursur(col,row)
//   lcd.print("Valid ID");
//
//   delay(1000);
//
//   lcd.clear();
//   lcd.setCursor(3, 0); //setCursur(col,row)
//   lcd.print("Send Coodinate.."); 
//
//   //getGPSCOR(s ,p);
//   String lat = "2";
//   String lon = "3";
//    char * t_lat = (char *)malloc (20 *sizeof(char));
//    lat.toCharArray(t_lat,20);
//    char * t_lon = (char *)malloc (20 *sizeof(char));
//    lon.toCharArray(t_lon,20);
//    char * st = (char *)malloc (20 *sizeof(char));
//    s.toCharArray(st,20);
//    char * pt = (char *)malloc (20 *sizeof(char));
//    p.toCharArray(pt,20);    
//  sendGPS(t_lat,t_lon,st,pt);
//   //sending cordinates
//   //
//   //
//   
  }else{
    //not valid id
    return false;
  }
  nextTime = RTC.get() + 3600;
  return true;
}

double getRealVoltage(int analogReadVal){

  //Serial.println(analogReadVal);
  //int x = (250*5*analogReadVal*1033)/(12.7*1024*299);
  double x = 0.3320745*analogReadVal;
  //Serial.println(x);
  return (x);
  
  }

double getUnit(){
      // put your main code here, to run repeatedly:
      //masure current
     Voltage = getVPP();
    
     VRMS = (Voltage/2.0) *0.707; 
     AmpsRMS = (VRMS * 1000)/mVperAmp - offset;

     int analogReadVal = analogRead(1);
     
     power = AmpsRMS * (getRealVoltage(analogReadVal)-40);
     //power = AmpsRMS * 250;
    
     double unit = power*1000/3600;//miliwatt/h

    return unit;
//
//    lcd.clear();
//    
//    lcd.setCursor(3, 0); //setCursur(col,row)
//    lcd.print(power);
//     
//     Serial.print(AmpsRMS,3);
//     Serial.println(" Amps RMS");
      //delay(1000);
  }


void checkBreakDown(double unit){
  //Serial.println(inString);
  if(digitalRead(9) == LOW){
    //send break down info
    writeDisconnectInfo(1);

    //save current value
    writeCurrentUnit(unit);
    Serial.println("Power off the system");

    char id_buf[12] = "";
    char state[2] = "0";

    inString.toCharArray(id_buf, 12);
    
    disconnectData(id_buf , state);
    while(true);
    //Automatically off the system
  }
}

void lcdView(byte a){
  //if(a < 100){
    lcd.clear();
    lcd.setCursor(3, 0); //setCursur(col,row)
    lcd.print(getCurrentDate());
    //Serial.println(getCurrentDate());
  //}else{
    lcd.clear();
    lcd.setCursor(3, 0); //setCursur(col,row)
  //}
}

byte a = 0;

void setup() {
  pinMode(8,OUTPUT);
  pinMode(9,INPUT);
  digitalWrite(8,HIGH);
  // put your setup code here, to run once:
  Serial.begin(9600);
  while(!Serial);
  serialSIM808.begin(9600);
  
  install();
  Serial.println();
  Serial.println(getId());
  
//  char id[] = "11";
//  char pwd[] = "1234";
//  char next[] = "14";
//  char pre[] = "45";
//  sendUnit(id,pwd,next,pre);
}

void loop() {

  myTime = RTC.get();
  if(nextTime - myTime <= 0){
    //gsmSEND
    String id = getId();
    String pwd = getPassword();
    char pwd_buf[5] = ""; 
    char id_buf[12] = "";
    id.toCharArray(id_buf, 12);
    pwd.toCharArray(pwd_buf, 5);
    char pre[8] = "";
    char next[8] = "";
    sprintf(pre, "%0.2f", readLastUnit());
    sprintf(next, "%0.2f", unit);
    
    writeLastUnit(unit);
    sendUnit(id_buf,pwd_buf,next,pre);
    unit=0;
    nextTime = RTC.get() + 3600;
  }
  //masure current

    unit += getUnit();
    Serial.println(unit);
    //Serial.println(power);

    checkBreakDown(unit);

    lcdView(a++);
}

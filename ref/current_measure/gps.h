void getGPSCOR(String id, String pwd){

  getgps();
  
  delay(2000);
  sendData( "AT+CGNSINF",1000,DEBUG);
  
  while(lat == "" || lon == "" || lat == "0" || lon=="0"){
    Serial.print(".");
     sendData( "AT+CGNSINF",1000,DEBUG); 
     delay(2000);
  }

 Serial.println("Latitude and Longitude");
 Serial.println(lat);
 Serial.println(lon);

 char * tmp_lat = (char *)malloc (20 *sizeof(char));
 lat.toCharArray(tmp_lat,20);

  char * tmp_lon = (char *)malloc (20 *sizeof(char));
 lon.toCharArray(tmp_lon,20);

 char * tmp_id = (char *)malloc (20 *sizeof(char));
 id.toCharArray(tmp_id,20);

 char * tmp_pwd = (char *)malloc (20 *sizeof(char));
 pwd.toCharArray(tmp_id,20);
 
  offgps();
  
  //sending data to server
 sendGPS(tmp_lat,tmp_lon,tmp_id,tmp_pwd);
 
}

void getgps(void){
   sendData( "AT+CGNSPWR=1",1000,true); 
   sendData( "AT+CGPSINF=0",1000,true); 
}

void offgps(void){
  sendData( "AT+CGNSPWR=0",1000,true);
}

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

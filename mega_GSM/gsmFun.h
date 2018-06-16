#include <string.h>

const int rs = 33, en = 31, d4 = 36, d5 = 34, d6 = 32, d7 = 30;
LiquidCrystal lcd(rs, en, d4, d5, d6, d7);

void sendGPS(char * lat, char * lon, char * id , char * pwd);
boolean resultCompare(String a,String b);

void getGPSCOR(String id, String pwd){

  lcd.clear();
  lcd.setCursor(3, 0); //setCursur(col,row)
  lcd.print("Getting GPS");

  getgps();
  delay(2000);
  sendData( "AT+CGNSINF",1000,DEBUG);
  
  lcd.setCursor(0, 1); //setCursur(col,row)
  int i = 0;
  
  while(lat == "" || lon == "" || lat == "0" || lon=="0"){
    Serial.print(".");
     sendData( "AT+CGNSINF",1000,DEBUG); 
     delay(2000);
     lcd.print("."); 
     i++;
     if(i==16){
        lcd.clear();
        lcd.setCursor(3, 0); //setCursur(col,row)
        lcd.print("Getting GPS");
        lcd.setCursor(0, 1); //setCursur(col,row)
        i=0;
     }
  }

 Serial.println("Latitude and Longitude");
 Serial.println(lat);
 Serial.println(lon);

 lcd.clear();
 lcd.setCursor(0, 0); //setCursur(col,row)
 lcd.print("Lat : ");
 lcd.setCursor(6, 0); //setCursur(col,row)
 lcd.print(lat);
 lcd.setCursor(0, 1); //setCursur(col,row)
 lcd.print("Lon : ");
 lcd.setCursor(6, 0); //setCursur(col,row)
 lcd.print(lon);

 char * tmp_lat = (char *)malloc (20 *sizeof(char));
 lat.toCharArray(tmp_lat,20);

  char * tmp_lon = (char *)malloc (20 *sizeof(char));
 lon.toCharArray(tmp_lon,20);

 //String id = "9000";
 char * tmp_id = (char *)malloc (20 *sizeof(char));
 id.toCharArray(tmp_id,20);

 char * tmp_pwd = (char *)malloc (20 *sizeof(char));
 pwd.toCharArray(tmp_id,20);
 
  offgps();
  lcd.clear();
  lcd.setCursor(3, 0); //setCursur(col,row)
  lcd.print("Sending GPS");
  
 sendGPS(tmp_lat,tmp_lon,tmp_id,tmp_pwd);
 
 lcd.clear();
 lcd.setCursor(0, 0); //setCursur(col,row)
 lcd.print("Sending Completed");
 
}

void sendGPS(char * lat, char * lon, char * id , char * pwd){

char * tmp = (char *)malloc (20 *sizeof(char));
/*
char one[] = "AT+HTTPPARA=\"URL\",\"http://shehanshaman.000webhostapp.com/long_path123456/shehanshaman/test123/index.php?id=";
char two[] = "&value=";
char three[] = "\"\r\n";
char combined[320] = {0};
*/
//char one[] = "AT+HTTPPARA=\"URL\",\"http://geethpriyanka1994.000webhostapp.com/passLocation.php?lat=";
char one[] = "AT+HTTPPARA=\"URL\",\"http://shehanshaman.000webhostapp.com/unique/passLocation.php?lat=";
char two[] = "&lng=";
char three[] = "\"\r\n";
char four[] = "&id=";
char five[] = "&password=";
char combined[320] = {0};

strcat(combined, one);
strcat(combined, lat);
strcat(combined, two);
strcat(combined, lon);
strcat(combined, four);
strcat(combined, id);
strcat(combined, five);
strcat(combined, pwd);
strcat(combined, three);

char * url = combined;

  int x =0;
  lcd.clear();
  lcd.setCursor(0, 0); //setCursur(col,row)
  lcd.print("Sending Cordinates");
  lcd.setCursor(0, 1); //setCursur(col,row)
  
 
   while( !myData(url)){
    lcd.print(".");
    x++;
    if(x>15){
      lcd.clear();
      lcd.setCursor(3, 0); //setCursur(col,row)
      lcd.print("Sending Cordinates");
      lcd.setCursor(0, 1); //setCursur(col,row)
      x = 0;
    }
   }
 
  Serial.println("DATA : --------------------------");
  Serial.println(result);
  Serial.println("---------------------------------");
  if(resultCompare(result,"ok")) {
    Serial.println("Data sussesfully uploaded");
  }
}

boolean resultCompare(String a,String b){
 char * tmp_result = (char *)malloc (200 *sizeof(char));
 a.toCharArray(tmp_result,200);

 char * tmp_out = (char *)malloc (200 *sizeof(char));
 b.toCharArray(tmp_out,200);

 int i =0;

 return true;
 
 while(tmp_result[i+8]){
  if(tmp_result[i] == 'H' && tmp_result[i+1] == 'T' && tmp_result[i+2] == 'T' && tmp_result[i+3] == 'P' && tmp_result[i+4] == 'R' && tmp_result[i+5] == 'E' && tmp_result[i+6] == 'A' && tmp_result[i+7] == 'D' && tmp_result[i+8] == ':'){
    i = i+9;
    while(tmp_result[i] != '\n'){
      i++;
      Serial.println(tmp_result[i]);
    }
    i = i+3;
    //comparison start
    int j =0;
    while(tmp_out[j]){Serial.println("hdka");
      Serial.println(tmp_result[i]);
      if(tmp_out[j] != tmp_result[i]){
        return false;
      }
      i++;
      j++;
    }
    return true;
  }
  i++;
 }
  //Serial.println(a);
}

//disconnect fun
void disconnectData(char * id, char * isActive){

//char one[] = "AT+HTTPPARA=\"URL\",\"http://geethpriyanka1994.000webhostapp.com/elec_meter/elec_meter/disconect/disconnectGet.php?meter_id=";
char one[] = "AT+HTTPPARA=\"URL\",\"http://shehanshaman.000webhostapp.com/unique/elec_meter/elec_meter/disconect/disconnectGet.php?meter_id=";

char two[] = "&isActive=";
char three[] = "\"\r\n";
char combined[320] = {0};

strcat(combined, one);
strcat(combined, id);
strcat(combined, two);
strcat(combined, isActive);
strcat(combined, three);

char * url = combined;
 
   while( !myData(url));
 
  Serial.println("DATA : --------------------------");
  Serial.println(result);
  Serial.println("---------------------------------");
  if(resultCompare(result,"ok")) {
    Serial.println("Data sussesfully uploaded");
  }
}

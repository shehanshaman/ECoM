void writeDisconnectInfo(byte in){
  EEPROM.write(36, in); // in 0-connect 1-disconnect
}

byte readDisconnectInfo(){
  return EEPROM.read(36);
}

String getId(){
  String id="";
  for(int i=0;i<EEPROM.read(0);i++){
    id += (char)EEPROM.read(i+1);
    //Serial.println(id);
  }
  return id;
}

void writeIdOnRom(String in){
  for(int i=1;i<=in.length();i++){
     EEPROM.write(i, in[i-1]);
  }
}


char * getServerName(){
  
  char serverName[20];

  for( int i=0 ; i <= 13 ; i++){
     serverName[i] = EEPROM.read(i+EEPROM.read(0)+2);
  }

  char protocol[] = "AT+HTTPPARA=\"URL\",\"http://" ;
  char endPath[] = ".000webhostapp.com/index.php?meter_id=";

  char link[350] = {0};

  strcat(link,protocol);
  strcat(link,serverName);
  strcat(link,endPath);

  return link;
  
  }

void writeServerNameOnRom(String serverName){
  int j=0;
  for( int i=EEPROM.read(0)+2 ; i <= (EEPROM.read(0) + 2 + 13) ;i++){
     EEPROM.write(i, serverName[j]);
     Serial.println(EEPROM.read(i));
     j++;
  }
}


void writeLastUnit(double unit){
  unit = unit *100;
  int tmp = 0;
  for(int i = 26;i<=31;i++){
    tmp = (int)unit % 10;
    EEPROM.write(i, tmp);
    unit = unit/10;
  }
}


void writeCurrentUnit(double unit){
  unit = unit *100;
  int tmp = 0;
  for(int i = 37;i<=42;i++){
    tmp = (int)unit % 10;
    EEPROM.write(i, tmp);
    unit = unit/10;
  }
}

double readCurrentUnit(){
  double unit = 0;
  unit = EEPROM.read(37) + EEPROM.read(38) *10 + EEPROM.read(39) * 100 + EEPROM.read(40) * 1000 + EEPROM.read(41) * 10000 + EEPROM.read(42) * 100000;
  unit = unit /100;
  return unit;
}


double readLastUnit(){
  double unit = 0;
  unit = EEPROM.read(26) + EEPROM.read(27) *10 + EEPROM.read(28) * 100 + EEPROM.read(29) * 1000 + EEPROM.read(30) * 10000 + EEPROM.read(31) * 100000;
  unit = unit /100;
  return unit;
}

void writePasswordOnRom(String in){
  for(int i=32;i<=in.length();i++){
     EEPROM.write(i, in[i-32]);
  }
}

String getPassword(){
  String pwd="";
  for(int i=32;i<=35;i++){
    pwd += (char)EEPROM.read(i);
    //Serial.println(id);
  }
  return pwd;
}

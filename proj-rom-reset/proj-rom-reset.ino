#include <EEPROM.h>

void setup() {
  // put your setup code here, to run once:
  Serial.begin(9600);
  EEPROM.write(0, 10);
  EEPROM.write(11, 0);

  //username reset
  for(int i=0;i<EEPROM.read(0);i++){
    EEPROM.write(i+1,'0');
  }

  //password reset
  for(int i=32;i<36;i++){
    EEPROM.write(i,'0');
  }

   //current data rest
  for(int i=37;i<42;i++){
    EEPROM.write(i,'0');
  }

  

  Serial.println("Reset the ROM ");
/*for(int i = 1;i<11;i++)
  Serial.println(EEPROM.read(i));
*/
}

void loop() {
  // put your main code here, to run repeatedly:

}





# Factory method

Structure
- Abstract class __Courier__
    - Contains the factory method
    - Logic needed
    
- Interface __Transport__
    - Declares the operations for each concrete product
    
- __TruckTransport__ and __PlaneTransport__ implementing Transport
    - The concrete product providing the implementations of the interface

- __AirCourier__ and __GroundCourier__ classes overriding the factory method to change the type of object created


![alt text](https://upload.wikimedia.org/wikipedia/commons/a/aa/W3sDesign_Abstract_Factory_Design_Pattern_UML.jpg)
*wikipedia image*

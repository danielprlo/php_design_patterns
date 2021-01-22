# Strategy pattern

Structure
- PaymentGateway strategy interface
  - Contains the function that will be called by the context class
  
- PayByDcCc and PayByPaypal concrete strategy classes.
  - Contains the implementation of the strategy interface

- Order 
  - Class that receives the concrete strategy class 
  - Calls the strategy class 

![alt text](https://upload.wikimedia.org/wikipedia/commons/3/39/Strategy_Pattern_in_UML.png)

*wikipedia image*

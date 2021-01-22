# Adapter

Structure

- Base component interface
    - Pizza
    - Contains the description of the function that will be called recursively 
    
- Concrete component
    - Margherita and VeggieParadise
    - implements base component interface
    
- Base decorator
    - PizzaToppings
    - implements base component interface
    - implements the constructor, accepting concrete components
  
- Concrete decorator
  - ExtraCheese and Jalapeno
  - The wrap functionalities, which call the parent function + returning their own value

![alt text](https://upload.wikimedia.org/wikipedia/commons/thumb/e/e9/Decorator_UML_class_diagram.svg/1920px-Decorator_UML_class_diagram.svg.png)

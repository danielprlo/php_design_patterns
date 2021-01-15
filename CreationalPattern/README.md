# Creational Patterns

## Factory method
- Provides interface for creating objects in superclass, but allow sublass to alter the type of the objects that will be created

### Use when
- Uncertain about the type of objects 
- Separates the object creation from the code that uses the product
    - If needed to add a new product, just extending the class we can add it easily
  
## Singleton
- Ensures that a class has only one instance, providing global access.
- Testing this classes becomes a challengue.
### Use when
- We want to have a class with only one instantiation of it
- Clear example is with db connections, to avoid each instance to open and close the connection for each request.

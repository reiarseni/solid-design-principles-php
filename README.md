## SOLID Design Principles

SOLID is a popular set of design principles that are used in object-oriented software development. 

SOLID is an acronym that stands for five key design principles: single responsibility principle, open-closed principle, Liskov substitution principle, interface segregation principle, and dependency inversion principle. All five are commonly used by software engineers and provide some important benefits for developers.

The broad goal of the SOLID principles is to reduce dependencies so that engineers change one area of software without impacting others. Additionally, they’re intended to make designs easier to understand, maintain, and extend. Ultimately, using these design principles makes it easier for software engineers to avoid issues and to build adaptive, effective, and agile software.

Concepts:
+ Abstractions: Abstract Clases/ Super-Clases and Interfaces/ Contracts
+ Concretions: Concrete Clases/ Sub-Clases
+ Entities: Modules, Clases or Functions, also Components and Microservices

<hr />

### 1) Single Responsibility Principle
This principle is about **actors and high level architecture**.
> A class should have one, and only one, reason to change.
> There should never be more than one reason for a class to change.

**Some definitions:**

+ A class should have only one job.  If a class has more than one responsibility, it becomes coupled.  A change to one responsibility results to modification of the other responsibility.
+ A class should only have a single responsibility, that is, only changes to one part of the software's specification should be able to affect the specification of the class.
+ This states that a class should have a single responsibility, but more than that, a class should only have one reason to change.
+ A class should have one and only one reason to change, meaning that a class should have only one job, only one responsibility.

**Overview**

Single-responsibility principle (SRP) is a principle under SOLID Design Principles which states that every module, class
or function in an application should have responsibility over a single part of that program's functionality, and it
should encapsulate that part.

It makes program easier to implement and prevents unexpected side effects in future changes. Its main intention is that
every class, function or method should be responsible to do only one work.

Classes, components and microservices that have only one responsibility are much easier to explain, understand and
implement than the ones that provide a solution for everything. This reduces the number of bugs, improves
development speed.

#### Examples:
1. First Example
   - [srp bad](1-Single-Responsibility-Principle/1-Example/srp-bad.php)
   - [srp good](1-Single-Responsibility-Principle/1-Example/srp-good.php)

2. Second Example
   - [index](1-Single-Responsibility-Principle/2-Example/index.php)

3. Third Example
    - [Student](1-Single-Responsibility-Principle/3-Example/Refactoring/Student.php)

<hr />


### 2) Open Closed Principle
This principle is about **class design and feature extensions**.
> A class must be open to extension, but closed to modification.
> Software entities ... should be open for extension, but closed for modification.

**Some definitions:**

+ Software entities(Classes, modules, functions) should be open for extension, not
modification.
+ "You should be able to extend a classes behavior, without modifying it."
+ "...software entities such as modules, classes, functions, etc. should be open for extension, but closed for modification."
+ "Objects or entities should be open for extension, but closed for modification."
+ A class must be open to extension, but closed to modification.

**Overview**

Open–closed principle states classes, modules, functions etc should be open for extension, but closed for modification
**i.e.** the behavior can be extended without modifying its source code.

The main benefit of this approach is that an interface introduces an additional level of abstraction which enables loose coupling. The implementations of an interface are independent of each other and don’t need to share any code. If you consider it beneficial that two implementations of an interface share some code, you can either use inheritance or composition.

#### Examples:
1. First Example
   - [ocp bad](2-Open-Closed-Principle/1-Example/ocp-bad.php)
   - [ocp good](2-Open-Closed-Principle/1-Example/ocp-good.php)

2. Second Example
   - [index](2-Open-Closed-Principle/2-Example/index.php)

3. Third Example
   - [Student](2-Open-Closed-Principle/3-Example/Refactoring/Student.php)

4. Fourth Example
   - [AllEmployees](2-Open-Closed-Principle/4-Example/Refactoring/AllEmployees.php)

5. Fifth Example
   - [Student](2-Open-Closed-Principle/5-Example/Refactoring/Student.php)

<hr />

### 3) Liskov Substitution Principle
This principle is about **subtyping and inheritance**
> Derived classes must be substitutable for their base classes.
> Functions that use pointers or references to base classes must be able to use objects of derived classes without knowing it.

**Some definitions:**
+ A sub-class must be substitutable for its super-class.  The aim of this principle is to ascertain that a sub-class can assume the place of its super-class without errors.  If the code finds itself checking the type of class then, it must have violated this principle.
+ Objects in a program should be replaceable with instances of their subtypes without altering the correctness of that program.
+ Derived classes must be substitutable for their base classes.
+ Every subclass/derived class should be substitutable for their base/parent class.
+ Software should not alter the desirable results when we replace a parent type with any of the subtypes.
+ Objects in a program should be replaceable with instances of their subtypes without altering the correctness of that program.
+ Objects should be replaceable by their subtypes without altering how the program works
+ An instance of type T must be able to be replaced by an instance of type G, such as G subtype of T, without this modifying the consistency of the program.
+ Child classes should never break parent class type definitions.

**Overview**

The principle defines that objects of a superclass shall be replaceable with objects of its subclasses without breaking the application

An instance of type T must be able to be replaced by an instance of type G, such as G subtype of T, without this modifying the consistency of the program.

#### Examples:
1. First Example
   - [lsp bad](3-Liskov-Substitution-Principle/1-Example/lsp-bad.php)
   - [lsp good](3-Liskov-Substitution-Principle/1-Example/lsp-bad.php)

2. Second Example
   - [index](3-Liskov-Substitution-Principle/2-Example/index.php)

3. Third Example
   - [Student](3-Liskov-Substitution-Principle/3-Example/Refactoring/Student.php)

<hr />

### 4) Interface Segregation Principle
This principle is about **business logic to clients communication**.
> Many client-specific interfaces are better than one general-purpose interface.

**Some definitions:**

+ Make fine grained interfaces that are client specific.
+ Clients should not be forced to depend upon interfaces that they do not use.
+ A client should never be forced to implement an interface that it doesn’t use or clients shouldn’t be forced to depend on methods they do not use.
+ Prefer several specific interfaces for each client rather than a single general interface.

**Overview**

Make fine grained interfaces that are client specific Clients should not be forced to depend upon interfaces that they do not use. This principle deals with the disadvantages of implementing big interfaces.

The interface-segregation principle (ISP) states that no class, function, method etc should be forced to depend on methods it does not use.

Large interfaces should be break down into chunks of small interfaces.

Similar to the Single Responsibility Principle, the goal of the Interface Segregation Principle is to reduce the side effects and frequency of required changes by splitting the software into multiple, independent parts.

#### Examples:
1. First Example
   - [isp bad](4-Interface-Segregation-Principle/1-Example/isp-bad.php)
   - [isp good](4-Interface-Segregation-Principle/1-Example/isp-bad.php)

2. Second Example
   - [index](4-Interface-Segregation-Principle/2-Example/index.php)

3. Third Example
   - [Student](4-Interface-Segregation-Principle/3-Example/Refactoring/Student.php)

4. Fourth Example
   - [Developer](4-Interface-Segregation-Principle/4-Example/Refactoring/Developer.php)

<hr />

### 5) Dependency Inversion Principle
This principle wires up all **other four principles in a single circle**.
> Depend on abstractions. Do not depend on concretions.

**Some definitions:**

+ Dependency Inversion Principle consists of two parts:
  - High-level modules should not depend on low-level modules. Both should depend on abstractions.
  - Abstractions should not depend on details. Details should depend on abstractions.

+ Dependency should be on abstractions not concretions 
    1. A. High-level modules should not depend upon low-level modules. Both should depend upon abstractions.  
    2. B. Abstractions should not depend on details. Details should depend upon abstractions.

+ One should depend upon abstractions, not concretions.
+ Depend on abstractions, not implementations.
+ Entities must depend on abstractions not on concretions. It states that the high level module must not depend on the low level module, but they should depend on abstractions.
+ Ability to override injected dependencies.
+ Our dependencies must be on interfaces/contracts or on abstract classes rather than on "concrete" classes.
+ The DIP is violated when one class depends of another class by concretion (2nd class is concrete class) and not by abstraction (2nd class is NOT abstract class, interface).
+ Dependency injection provides a component with its dependencies either via a constructor, method calls or property configuration.
+ Dependencies are separated by controlling them and instantiating them elsewhere in the system.
+ Dependency injection allows us to inject only the dependencies we need, when we need and those without having to hard-write any dependencies.

**Overview**

Dependency inversion principle is a specific form of loosely coupling software modules.

The general idea of this principle is as simple as it is important: High-level modules, which provide complex logic, should be easily reusable and unaffected by changes in low-level modules, which provide utility features. To achieve that, you need to introduce an abstraction that decouples the high-level and low-level modules from each other.

There comes a point in software development where our app will be largely composed of modules.  When this happens, we have to clear things up by using dependency injection.  High-level components depending on low-level components to function.

#### Examples:
1. First Example
   - [dip bad](5-Dependency-Inversion-Principle/1-Example/dip-bad.php)
   - [dip good](5-Dependency-Inversion-Principle/1-Example/dip-good.php)

2. Second Example
   - [index](5-Dependency-Inversion-Principle/2-Example/index.php)
   
3. Third Example
  - [StudentRepository](5-Dependency-Inversion-Principle/3-Example/Refactoring/StudentRepository.php)



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





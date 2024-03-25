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


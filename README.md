# Design Patterns

Ao desenvolver software nos deparamos com diversos problemas, que, embora muitas vezes sejam de necessidades
distintas, possuem soluções comuns. Mas como saber qual solução "comum" usar para atender cada problema?
Foi para isso que surgiram os padrões de projeto!


# Quando falamos de engenharia de software, um "Design Pattern" ou Padrão de Projeto é:

* Uma solução repetível para um problema comum ao fazer o "design do software".
* É um "modelo" de "como resolver" um problema.
* Esta "solução" ou "modelo" poderá ser reutilizada em diversas situações diferentes.


# Qual o objetivo deste projeto?

Apresentaremos aqui pelo menos um exemplo de cada padrão de projeto essencial para desenvolver software nos dias de hoje.
Para isto, utilizaremos como linguagem de exemplo o PHP (pois é linguagem que mais uso no trabalho).

# Como estão separados os Design Patterns?

Os Design Patterns estão separados em 3 grandes grupos. Vamos conhecê-los:

## [Creational (ou Criacional):](src/GSoares/DesignPatterns/Creational)

Este grupo trata sobre a instanciação de classes, como devemos criá-las e como devemos utilizar os objetos instanciados e o uso correto de heranças.

* [Abstract Factory](src/GSoares/DesignPatterns/Creational/AbstractFactory)
* [Builder](src/GSoares/DesignPatterns/Creational/Builder)
* [Factory Method](src/GSoares/DesignPatterns/Creational/FactoryMethod)
* [Object Pool](src/GSoares/DesignPatterns/Creational/ObjectPool)
* [Prototype](src/GSoares/DesignPatterns/Creational/Prototype)
* [Singleton](src/GSoares/DesignPatterns/Creational/Singleton)

## [Structural (ou Estrutural):](src/GSoares/DesignPatterns/Structural)

Este grupo trata sobre composição de classes e objetos, o uso da herança para compor interfaces e melhores formas de construir objetos para adição de novas funcionalidades.

* [Adapter](src/GSoares/DesignPatterns/Structural/Adapter)
* [Bridge](src/GSoares/DesignPatterns/Structural/Bridge)
* [Composite](src/GSoares/DesignPatterns/Structural/Composite)
* [Decorator](src/GSoares/DesignPatterns/Structural/Decorator)
* [Facade](src/GSoares/DesignPatterns/Structural/Facade)
* [Flyweight](src/GSoares/DesignPatterns/Structural/Flyweight)
* [Private Class Data](src/GSoares/DesignPatterns/Structural/PrivateClassData)
* [Proxy](src/GSoares/DesignPatterns/Structural/Proxy)

## [Behavioral (ou Comportamental):](src/GSoares/DesignPatterns/Behavioral)

Este grupo trata sobre comunicação entre objetos das classes, ou seja, como estes objetos devem se "comportar" para poderem se comunicar.

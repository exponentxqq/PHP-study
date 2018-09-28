# 一、设计模式6大原则

## 1. 开闭原则（Open Close Principle）
    对扩展开放，对修改关闭。
    在程序需要进行扩展的时候，不能去修改原有代码，实现一个热插拔的效果。
    简言之，就是为了使程序的扩展性更好，易于维护和升级。
    
## 2. 里氏替换原则（Liskov Substitution Principle）
    任何基类可以出现的地方，子类一定可以出现。
    只有当派生类可以替换掉基类，且软件单位的功能不受到影响时，基类才能真正被复用，而派生类也能够在基类的基础上增加新的行为
    里氏代换原则是对开闭原则的补充
    实现开闭原则的关键步骤就是抽象化，而基类与子类的继承关系就是抽象化的具体实现，所以里氏代换原则是对实现抽象化的具体步骤的规范。
    
## 3. 依赖倒置原则（Dependence Inversion Principle）
    这个原则是开闭原则的基础，具体内容：针对接口编程，依赖于抽象而不依赖于具体。
    
## 4. 接口隔离原则（Interface Segregation Principle）
    使用多个隔离的接口，比使用单个接口要好。
    降低类之间的耦合度
    
## 5. 迪米特原则（又称 最少知道原则）（Demeter Principle）
    一个实体应当尽量少的与其他实体之间发生相互作用，使得系统功能模块相对独立
    
## 6. 合成复用原则（Composite Reuse Principle）
    尽量使用合成/聚合的方式，而不是使用继承
    
# 二、设计模式分类

## 1. 创建型模式（Creational Pattern）
    这些设计模式提供了一种在创建对象的同时隐藏创建逻辑的方式，而不是使用 new 运算符直接实例化对象。这使得程序在判断针对某个给定实例需要创建哪些对象时更加灵活。
    
### 1) 工厂模式（Factory Pattern）
### 2) 抽象工厂模式（Abstract Factory Pattern）
### 3) 单例模式（Singleton Pattern）
### 4) 建造者模式（Builder Pattern）
### 5) 原型模式（Prototype Pattern）

## 2. 结构型模式（Structural Pattern）
    这些设计模式关注类和对象的组合。继承的概念被用来组合接口和定义组合对象获得新功能的方式。
    
### 1) 适配器模式（Adapter Pattern） 
### 2) 桥接模式（Bridge Pattern）
### 3) 过滤器模式（Filter Pattern）
### 4) 组合模式（Composite Pattern）
### 5) 装饰器模式（Decorator Pattern）
### 6) 外观模式（Facade Pattern）
### 7) 享元模式（Flyweight Pattern）
### 8) 代理模式（Proxy Pattern）

## 3. 行为型模式（Behaviour Pattern）
    这些设计模式特别关注对象之间的通信
    
### 1) 职责链模式（Chain of Responsibility Pattern）
### 2) 命令模式（Command Pattern）
### 3) 解释器模式（Interpreter Pattern）
### 4) 迭代器模式（Iterator Pattern）
### 5) 中介者模式（Mediator Pattern）
### 6) 备忘录模式（Memento Pattern）
### 7) 观察者模式（Observer Pattern）
### 8) 状态模式（State Pattern）
### 9) 空对象模式（Null Object Pattern）
### 10) 策略模式（Strategy Pattern）
### 11) 模版模式（Template Pattern）
### 12) 访问者模式（Visitor Pattern）

## 4. J2EE模式
    这些设计模式特别关注表示层

### 1) MVC模式  
### 2) 业务代表模式（Business Delegate Pattern）
### 3) 组合实体模式（Composite Entity Pattern）
### 4) 数据访问对象模式（Data Access Object Pattern）
### 5) 前端控制器模式（Front Controller Pattern）
### 6) 拦截过滤器模式（Intercepting Filter Pattern）
### 7) 服务定位器模式（Service Locator Pattern）
### 8) 传输对象模式（Transfer Object Pattern）
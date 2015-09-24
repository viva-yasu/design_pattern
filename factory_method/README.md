# Factory Methodパターン

![クラス図](./src/factory_method.png)

## Productクラス
スーパークラスとして、このパターンで生成されるConcreteProductクラスのインスタンスが持つべきインターフェース（API）を定める抽象クラス。  

## Creatorクラス
スーパークラスとして、ConcreteProductクラスのインスタンスを生成する抽象クラス。  
このクラスでは、createメソッドのみを定義しており、内部的にcreateProductメソッドを呼び出しインスタンスの生成を行う。

## ConcreteProductクラス
このクラスで、具体的な肉付けを行う。

## ConcreteCreatorクラス
このクラスでは、具体的に生成するクラスを定める。

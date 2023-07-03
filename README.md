# Deign Patterns

## Creational

### Singleton Pattern

```plantuml
@startuml
class Singleton
{
    - singleton: Singleton
    - Singleton()
    + getInstance(): Singleton
}
@enduml
```

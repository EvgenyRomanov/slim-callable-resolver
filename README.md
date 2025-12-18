# 🔄 Slim Callable Resolver 

## 📝 Описание
Если вы собираете проект PHP на Slim и в качестве DI-контейнера используете `illuminate/container`,  
то вы могли столкнуться с проблемой autowiring в контроллерах.  

Данная библиотека решает её.  
`SlimCallableResolver` реализует `\Slim\Interfaces\AdvancedCallableResolverInterface` и его можно использовать вместо `\Slim\CallableResolver`.  

## 📑 Особенности

- 🧩 Совместимость с `\Slim\Interfaces\AdvancedCallableResolverInterface` и `\Illuminate\Container\Container`
- 🛡️ Покрытие тестами
- 🐳 Docker-контейнер для быстрого запуска
- ⚙️ Makefile с предустановленными командами

## 📦 Установка

```bash
composer require evgeny-romanov/slim-callable-resolver
```

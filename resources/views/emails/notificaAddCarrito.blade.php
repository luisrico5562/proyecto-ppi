<x-mail::message>
# Disco añadido al carrito exitosamente.

El disco {{ $disco->nombre }} fue añadido

    Thanks, <br>
    {{ config ('app.name')}}

</x-mail::message>
@props(['title'=>'','bodyClass'=>''])
<x-base-layout :$title :cssClass="$bodyClass" >
  <x-layouts.header></x-layouts.header>
  {{$slot}}
</x-base-layout>
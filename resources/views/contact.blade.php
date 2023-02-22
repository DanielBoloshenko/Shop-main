@extends('layouts.app')

@section('content')

    <div class="container">
        <div class="d-flex justify-content-center mb-3">
            <h1 class="fw-bold">Где нас найти</h1>
        </div>
    </div>
    <div class="container">
        <div class="d-flex justify-content-center">
            <iframe class="rounded" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2289.0988698096107!2d73.29399774061902!3d54.98890048558513!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x43ab01a16c97e88d%3A0x9046c210c7d2cd02!2z0J7QvNGB0LrQsNGPINCw0LrQsNC00LXQvNC40Y8g0Y3QutC-0L3QvtC80LjQutC4INC4INC_0YDQtdC00L_RgNC40L3QuNC80LDRgtC10LvRjNGB0YLQstCw!5e0!3m2!1sru!2sru!4v1676990504909!5m2!1sru!2sru" width="800" height="600" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
        </div>
    </div>

    <div class="container mt-5">
        <div class="d-flex justify-content-center">
            <form style="width: 800px;">
                <div class="form-outline mb-4">
                    <label class="form-label" for="">Ваше имя</label>
                    <input type="text" id="form4Example1" class="form-control" placeholder="Введите ваше имя">
                </div>
              
                <div class="form-outline mb-4">
                    <label class="form-label" for="">Ваш Email</label>
                    <input type="email" id="form4Example2" class="form-control" placeholder="Введите ваш Email">
                </div>
              
                <div class="form-outline mb-4">
                    <label class="form-label" for="">Ваше сообщение</label>
                    <textarea class="form-control" id="form4Example3" rows="4" placeholder="Напишите сообщение..."></textarea>
                </div>
              
                <button type="submit" class="btn btn-dark btn-block mb-4">Отправить</button>
              </form>
        </div>
    </div>
@endsection
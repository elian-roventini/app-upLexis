@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Tela de captura') }}</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    <form method="POST" action="">
                        <div class="form-group row">
                            <label for="text" class="col-md-4 col-form-label text-md-right">{{ __('Digite o texto') }}</label>

                            <div class="col-md-6">
                                <input id="textoCapturar" type="text" class="form-control @error('text') is-invalid @enderror" name="textoCapturar" value="{{ old('textoCapturar') }}" required autofocus>

                                @error('text')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row mb-0">
                            <div class="col-md-8 offset-md-4">
                                <button type="submit" class="btn btn-primary">
                                    {{ __('Capturar') }}
                                </button>

                    </form>
                    
                </div>
            </div>
        </div>
    </div>
</div>

<?php

    $url = "https://www.questmultimarcas.com.br/estoque";

    $opts = [
        CURLOPT_URL => $url,
        CURLOPT_RETURNTRANSFER => true
    ];

    $ch = curl_init();
    curl_setopt_array($ch, $opts);

    $response = curl_exec($ch);

    if(empty($response)){
        echo curl_error($ch);
        exit(1);
    }

    echo $response;

    //-------------------------------------------//

    // Instanciar o DOMDocument
    // $dom = new DOMDocument;

    // // Carregar o HTML recolhido para o DOMDocument
    // @$dom->loadHTML($response);

    // // $main = $dom->getElementsByTagName('main')->item(0);

    // $article = $dom->getElementsByTagName('article');
    // // $a = $article->getElementsByTagName('a');
    // foreach ($article as $tag) {

    //     // apanhar o valor do atributo 'href'
    //     // $href = $tag->getAttribute('href');

    //     // se não estiver vazio
    //     // if (!empty($tag)) {

    //         // guardar a query string numa variável
            
    //         // $queryString = parse_url($tag, PHP_URL_QUERY);  // Resultado: ref=fvFCF9D8N4Ak

    //         // echo $tag->nodeValue, PHP_EOL;
    //         // echo '<br>';

            

    //         var_dump($tag);
    //         echo '<br> <br>';
    //     // }
    // }

?> 

@endsection

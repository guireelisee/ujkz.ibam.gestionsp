@extends('layouts.maquette')

@section('objet')
BORDEREAU <br>
DES PIECES TRANSMISES <br>
@endsection

@section('conjonction')
A <br>
@endsection

@section('destinataire')
Monsieur le Vice-Président chargée des Enseignements et des Innovations Pédagogiques de l’Université Joseph KI-ZERBO
@endsection

@section('corps')
<br><br>
<div class="container">
    <div class="row">
        <table class="table table-bordered ">
            <thead>
                <tr>
                    <th>NATURE DES PIECES</th>
                    <th>NOMBRE DE PIECES</th>
                    <th>OBSERVATION</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td>laborum id odit veniam repellat accusamus, voluptates iure esse architecto necessitatibus ex dolore! Minus facilis perferendis numquam officiis!</td>
                    <td>Lorem, ipsum dolor sit amet</td>
                    <th>Alias rem vitae laboriosam delectus tenetur doloremque magni, ut ea voluptates.</th>
                </tr>
            </tbody>
        </table>
    </div>
</div>
@endsection

@section('signataire')
<div class="container">
    <div class="row text-center">
        <div class="col">
            <span>
                <div style="margin: 2% 0% 0% 70%">
                    <span>
                        Pour le Directeur de l’IBAM, et P/D le Secrétaire Principal
                    </span>
                </div>
            </span>
        </div>
    </div>
    <div class="row text-center" style="font-weight: bolder">
        <div class="col">
            <span>
                <div style="margin: 5% 0% 0% 70%">
                    <u>
                        Ousmane PAFADNAM
                    </u>
                </div>
            </span>
        </div>
    </div>
</div>
@endsection

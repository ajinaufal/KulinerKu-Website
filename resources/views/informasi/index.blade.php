@extends('layouts.master')

@section('body')

    <!-- content -->
    <div class="container-fluid">
        <div class="row justify-content-center">
            <div class="col-custom bg-light align-self-center mb-4">
                <div class="container-fluid">
                    <div class="d-flex flex-row">
                        <div class="com-sm-2"> dilihat: {{ $product->JumlahView }}</div>
                        <div class="com-sm-2 ms-3"> dihubungi: {{ $product->JumlahCall }}</div>
                    </div>
                </div>


                <div class="container-fluid">
                    <img src="https://firebasestorage.googleapis.com/v0/b/carimakan-d4a4e.appspot.com/o/{{ $product->URLFoto }}"
                        class="rounded mx-auto d-block" alt="Cinque Terre" width="200" height="200">
                </div>
                <div class="container-fluid text-center">
                    <h5 class="card-text text-center">{{ $product->NamaToko }}</h5>
                    <p class="text-16 text-center">
                        @foreach (explode('&&', $product->Profil) as $lineText)
                            {{ str_replace('^', ',', $lineText) }} <br>
                        @endforeach
                    </p>
                </div>

                <div class="container-fluid">
                    <div class="d-flex flex-row justify-content-center ms-2">
                        <div class="col-sm justify-content-center">
                            <div class="row">
                                <button type="button" class="btn btn-primary btn-block text-14" style="background-color: #FF1700;
                                line-height: 1;">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="32" fill="currentColor"
                                        class="bi bi-telephone-fill mb-1" viewBox="0 0 16 16">
                                        <path fill-rule="evenodd"
                                            d="M1.885.511a1.745 1.745 0 0 1 2.61.163L6.29 2.98c.329.423.445.974.315 1.494l-.547 2.19a.678.678 0 0 0 .178.643l2.457 2.457a.678.678 0 0 0 .644.178l2.189-.547a1.745 1.745 0 0 1 1.494.315l2.306 1.794c.829.645.905 1.87.163 2.611l-1.034 1.034c-.74.74-1.846 1.065-2.877.702a18.634 18.634 0 0 1-7.01-4.42 18.634 18.634 0 0 1-4.42-7.009c-.362-1.03-.037-2.137.703-2.877L1.885.511z" />
                                    </svg>
                                    {{ substr($product->NoHP, 0, 8) }}XX
                                </button>
                            </div>
                        </div>

                        <div class="col-sm">
                            <div class="row ms-3">
                                <button type="button" class="btn btn-primary btn-block" style="background-color: #4db151">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="32" fill="currentColor"
                                        class="bi bi-whatsapp mb-1" viewBox="0 0 16 16">
                                        <path
                                            d="M13.601 2.326A7.854 7.854 0 0 0 7.994 0C3.627 0 .068 3.558.064 7.926c0 1.399.366 2.76 1.057 3.965L0 16l4.204-1.102a7.933 7.933 0 0 0 3.79.965h.004c4.368 0 7.926-3.558 7.93-7.93A7.898 7.898 0 0 0 13.6 2.326zM7.994 14.521a6.573 6.573 0 0 1-3.356-.92l-.24-.144-2.494.654.666-2.433-.156-.251a6.56 6.56 0 0 1-1.007-3.505c0-3.626 2.957-6.584 6.591-6.584a6.56 6.56 0 0 1 4.66 1.931 6.557 6.557 0 0 1 1.928 4.66c-.004 3.639-2.961 6.592-6.592 6.592zm3.615-4.934c-.197-.099-1.17-.578-1.353-.646-.182-.065-.315-.099-.445.099-.133.197-.513.646-.627.775-.114.133-.232.148-.43.05-.197-.1-.836-.308-1.592-.985-.59-.525-.985-1.175-1.103-1.372-.114-.198-.011-.304.088-.403.087-.088.197-.232.296-.346.1-.114.133-.198.198-.33.065-.134.034-.248-.015-.347-.05-.099-.445-1.076-.612-1.47-.16-.389-.323-.335-.445-.34-.114-.007-.247-.007-.38-.007a.729.729 0 0 0-.529.247c-.182.198-.691.677-.691 1.654 0 .977.71 1.916.81 2.049.098.133 1.394 2.132 3.383 2.992.47.205.84.326 1.129.418.475.152.904.129 1.246.08.38-.058 1.171-.48 1.338-.943.164-.464.164-.86.114-.943-.049-.084-.182-.133-.38-.232z" />
                                    </svg> WhatsApp</button>
                            </div>
                        </div>

                        <div class="col-sm-2 ms-3">
                            <svg xmlns="http://www.w3.org/2000/svg" width="45" height="45" fill="currentColor"
                                class="bi bi-heart" viewBox="0 0 16 16">
                                <path
                                    d="m8 2.748-.717-.737C5.6.281 2.514.878 1.4 3.053c-.523 1.023-.641 2.5.314 4.385.92 1.815 2.834 3.989 6.286 6.357 3.452-2.368 5.365-4.542 6.286-6.357.955-1.886.838-3.362.314-4.385C13.486.878 10.4.28 8.717 2.01L8 2.748zM8 15C-7.333 4.868 3.279-3.04 7.824 1.143c.06.055.119.112.176.171a3.12 3.12 0 0 1 .176-.17C12.72-3.042 23.333 4.867 8 15z" />
                            </svg>
                        </div>
                    </div>

                    <div class="row">
                        <p class="text-center text-16 mt-2">{{ $product->Alamat }}</p>
                    </div>

                    <div class="row mb-5">
                        <div class="col-sm-12">
                            <div class="d-grid">
                                <button type="button font-weight-bold" class="btn btn-primary btn-block"
                                    style="background-color: #0e7816">Buka di Google Maps</button>
                            </div>
                        </div>
                    </div>

                </div>

            </div>

        </div>

    </div>

@endsection

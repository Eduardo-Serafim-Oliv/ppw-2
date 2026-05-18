<style>
    .card-filme {

        width: 15%;
        height: 15%;
        transition: 0.3s;
        cursor: pointer;
    }

    .card-filme:hover {

        transform: scale(1.05);
    }

    .card-filme img {

        height: 20%;
        object-fit: cover;
    }
</style>

<div class="d-flex overflow-auto gap-3 pb-3">
    <div class="card card-filme flex-shrink-0">
        <img src="{{ asset('imagens/o_senhor_dos_aneis_o_retorno_do_rei.webp') }}" class="card-img-top"
            alt="O Senhor dos Aneis">

        <div class="card-body ">
            <h5 class="card-title">
                O Senhor dos Aneis: O Retorno do Rei
            </h5>
            <p class="card-text">
                This is a longer card with supporting text below.
            </p>
        </div>
    </div>
    <div class="card card-filme flex-shrink-0">
        <img src="{{ asset('imagens/batman_o_cavaleiro_das_trevas.webp') }}" class="card-img-top" alt="Batman">

        <div class="card-body">
            <h5 class="card-title">
                Batman: O Cavaleiro das Trevas
            </h5>
            <p class="card-text">
                This is a short card.
            </p>
        </div>
    </div>
    <div class="card card-filme flex-shrink-0">
        <img src="{{ asset('imagens/whiplash.webp') }}" class="card-img-top" alt="Whiplash">

        <div class="card-body">
            <h5 class="card-title">
                Whiplash
            </h5>
            <p class="card-text">
                This is a longer card with supporting text below.
            </p>
        </div>
    </div>
</div>

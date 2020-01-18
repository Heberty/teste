<section class="section-form" id="recrutamento">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-12 col-lg-6">
                <form action="" class="form-site">
                    <h1 class="title-form">Informações pessoais</h1>
                    <div class="form-group">
                        <label for="" class="form-label">Nome completo</label>
                        <input type="text" class="form-control">
                    </div>
                    <div class="form-group">
                        <label for="" class="form-label">E-mail</label>
                        <input type="text" class="form-control">
                    </div>
                    <div class="form-group">
                        <label for="" class="form-label">Telefone(Com DDD)</label>
                        <input type="text" class="form-control sp_celphones">
                    </div>
                    <h1 class="title-form">Carta de apresentação</h1>
                    <div class="form-group">
                        <label for="" class="form-label">Conte sua motivação (Opcional)</label>
                        <textarea name="" id="" placeholder="Faça um breve resumo sobre voçê" class="form-control"></textarea>
                    </div>
                    <h1 class="title-form">Últimas perguntas</h1>
                    <div class="form-group">
                        <label for="" class="form-label">URL do seu Linkedin</label>
                        <input type="text" class="form-control" placeholder="www.linkedin.com/xxxxxxxx">
                    </div>
                    <div class="form-group">
                        <label for="" class="form-label">URL do seu Github</label>
                        <input type="text" class="form-control" placeholder="www.github.com/xxxxxxxx">
                    </div>
                    <div class="form-group">
                        <div class="input-group-prepend">
                            <label class="form-label" for="inputGroupSelect01">Qual seu nível de inglês?</label>
                        </div>
                        <select class="custom-select form-control" id="inputGroupSelect01">
                            <option selected>Escolha</option>
                            <option value="1">Nenhum</option>
                            <option value="2">Intermediário</option>
                            <option value="3">Fluente</option>
                        </select>
                    </div>
                    <div class="form-group">
                        <label for="" class="form-label">Pretenção Salarial</label>
                        <input type="text" class="form-control money2" value="R$">
                    </div>
                    <h1 class="title-form">Anexe seu currículo em PDF ou DOC</h1>
                    <div class="mb50">
                        <div class="custom-file">
                            <input type="file" class="custom-file-input" id="inputGroupFile01">
                            <label class="custom-file-label" for="inputGroupFile01"><img src="{{ asset('images/min/icon-clip.svg')}}" alt=""> Escolha o arquivo</label>
                        </div>
                    </div>
                    <button class="btn-site btn-send">Enviar</button>
                </form>
            </div>
        </div>
    </div>
</section>
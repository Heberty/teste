<section class="section-form" id="recrutamento">
    <div class="container">
        <div class="col-12">
            @include('pages.flash-message')
            @if(count($errors) != 0)
                @foreach($errors->all() as $erro)
                    <div class="alert alert-danger alert-block">
                        {{ $erro }}
                    </div>
                @endforeach
            @endif
        </div>
        <div class="row justify-content-center">
            <div class="col-12 col-lg-6">
                <form action="{{ route('send') }}" class="form-site" method="post" enctype="multipart/form-data">
                    {{ csrf_field() }}
                    <h1 class="title-form">Informações pessoais</h1>
                    <div class="form-group">
                        <label for="name" class="form-label">Nome completo</label>
                        <input type="text" class="form-control" name="name" value="{{ old('name') }}" id="name">
                    </div>
                    <div class="form-group">
                        <label for="email" class="form-label">E-mail</label>
                        <input type="text" class="form-control" name="email" value="{{ old('email') }}" id="email">
                    </div>
                    <div class="form-group">
                        <label for="phone" class="form-label">Telefone(Com DDD)</label>
                        <input type="text" class="form-control sp_celphones" name="phone" value="{{ old('phone') }}" id="phone">
                    </div>
                    <h1 class="title-form">Carta de apresentação</h1>
                    <div class="form-group">
                        <label for="letter" class="form-label">Conte sua motivação (Opcional)</label>
                        <textarea name="" id="" placeholder="Faça um breve resumo sobre voçê" class="form-control" name="letter" value="{{ old('letter') }}" id="letter"></textarea>
                    </div>
                    <h1 class="title-form">Últimas perguntas</h1>
                    <div class="form-group">
                        <label class="form-label">URL do seu Linkedin</label>
                        <input type="text" class="form-control" placeholder="www.linkedin.com/xxxxxxxx" name="linkedin" value="{{ old('linkedin') }}">
                    </div>
                    <div class="form-group">
                        <label class="form-label">URL do seu Github</label>
                        <input type="text" class="form-control" placeholder="www.github.com/xxxxxxxx" name="github" value="{{ old('github') }}" >
                    </div>
                    <div class="form-group">
                        <div class="input-group-prepend">
                            <label class="form-label" for="english">Qual seu nível de inglês?</label>
                        </div>
                        <select class="custom-select form-control" name="english" value="{{ old('english') }}" id="english">
                            <option selected>Escolha</option>
                            <option value="Nenhum">Nenhum</option>
                            <option value="Intermediário">Intermediário</option>
                            <option value="Fluente">Fluente</option>
                        </select>
                    </div>
                    <div class="form-group">
                        <label for="money" class="form-label">Pretenção Salarial</label>
                        <input type="text" class="form-control money2" name="money" value="{{ old('money') }}" id="money" value="R$">
                    </div>
                    <h1 class="title-form">Anexe seu currículo em PDF ou DOC</h1>
                    <div class="mb50">
                        <div class="custom-file">
                            <input type="file" class="custom-file-input" id="inputGroupFile01" name="curriculo" value="{{ old('curriculo') }}">
                            <label class="custom-file-label" for="inputGroupFile01"><img src="{{ asset('images/min/icon-clip.svg')}}" alt=""> Escolha o arquivo</label>
                        </div>
                    </div>
                    <button class="btn-site btn-send green-purple">Enviar</button>
                </form>
            </div>
        </div>
    </div>
</section>
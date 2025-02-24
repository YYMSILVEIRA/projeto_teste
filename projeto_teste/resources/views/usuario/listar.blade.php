{!! Abrir_HtmlHeader('Listagem de usuários cadastrados') !!}
    {!! Abrir_Container() !!}
        
        {!! cabecalho() !!} 
        
        {!! Titulo("Usuários",nroTitulo:"1") !!}
        
        
        {!! HBtn('Cadastrar Novo Usuário', 'cadastrar_usuario','btn-primary','mb-3') !!}


        <table class="table">
            <thead>
                <tr>
                    <th>#</th>
                    <th>Nome</th>
                    <th>Email</th>
                    <th>Ações</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td>1</td>
                    <td>Usuário 1</td>
                    <td>usuario1@example.com</td>
                    <td>
                        <a href="edit_user.html" class="btn btn-info btn-sm">Editar</a>
                        <form action="#" method="POST" style="display:inline;">
                            <button type="submit" class="btn btn-danger btn-sm">Deletar</button>
                        </form>
                    </td>
                </tr>
                <tr>
                    <td>2</td>
                    <td>Usuário 2</td>
                    <td>usuario2@example.com</td>
                    <td>
                        <a href="edit_user.html" class="btn btn-info btn-sm">Editar</a>
                        <form action="#" method="POST" style="display:inline;">
                            <button type="submit" class="btn btn-danger btn-sm">Deletar</button>
                        </form>
                    </td>
                </tr>
            </tbody>
        </table>

    {!! Fechar_Container() !!}

{!! Fechar_HtmlHeader() !!}
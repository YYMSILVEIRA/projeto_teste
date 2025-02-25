{!! Abrir_HtmlHeader('Todas as categorias do sistema') !!}

    {!! Abrir_Container() !!}
        {!! cabecalho() !!}
        
        {!! Titulo('Categorias', nroTitulo:'1') !!}
        
        {!! HBtn("Cadastrar Nova Categoria","cadastrar_categoria","btn-primary", "mb-3") !!}

        <table class="table">
            <thead>
                <tr>
                    <th>#</th>
                    <th>Nome</th>
                    <th>Ações</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td>1</td>
                    <td>Categoria 1</td>
                    <td>
                        <a href="edit_category.html" class="btn btn-info btn-sm">Editar</a>
                        <form action="#" method="POST" style="display:inline;">
                            <button type="submit" class="btn btn-danger btn-sm">Deletar</button>
                        </form>
                    </td>
                </tr>
                <tr>
                    <td>2</td>
                    <td>Categoria 2</td>
                    <td>
                        <a href="edit_category.html" class="btn btn-info btn-sm">Editar</a>
                        <form action="#" method="POST" style="display:inline;">
                            <button type="submit" class="btn btn-danger btn-sm">Deletar</button>
                        </form>
                    </td>
                </tr>
            </tbody>
        </table>
        
    {!! Fechar_Container() !!}

{!! Fechar_HtmlHeader() !!}

<html>
<body>
<table>
    <thead>
    <th>
        RUC
    </th>
    <th>
        NOMBRE
    </th>
    <th>
        SECTOR
    </th>
    <th>
        NUMERO
    </th>
    <th>
        DIRECCION
    </th>
    <th>
        MISION
    </th>
    <th>
        VISION
    </th>
    </thead>
    <tbody>
    @foreach($empresas as $empresa)
        <tr>
            <td>
                {{$empresa->ruc_emp}}
            </td>
            <td>
                {{$empresa->nombre_emp}}
            </td>
            <td>
                {{$empresa->sector_emp}}
            </td>
            <td>
                {{$empresa->numero_emp}}
            </td>
            <td>
                {{$empresa->direccion_emp}}
            </td>
            <td>
                {{$empresa->mision_emp}}
            </td>
            <td>
                {{$empresa->vision_emp}}
            </td>
        </tr>
    @endforeach
    </tbody>
</table>
</body>
</html>

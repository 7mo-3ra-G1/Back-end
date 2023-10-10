<?php
    $id=$_GET['id'];
    include "functions.php";
    
    switch ($id) {
        case 'GetAula':
            $aulas = getAula();
            print json_encode($aulas->fetch_all());
            break;
        case 'GetCurso':
            $aulas = getCurso();
            print json_encode($aulas->fetch_all());
            break;
        case 'GetCronograma':
            $aulas = getCronograma();
            print json_encode($aulas->fetch_all());
            break;
        case 'GetCategoria':
            $aulas = getCategoria();
            print json_encode($aulas->fetch_all());
            break;
        case 'GetGuias':
            $aulas = getGuias();
            print json_encode($aulas->fetch_all());
            break;
        case 'GetTalleristas':
            $aulas = getTalleristas();
            print json_encode($aulas->fetch_all());
            break;
        case 'GetGuiaCurso':
            $aulas = getGuiaCurso();
            print json_encode($aulas->fetch_all());
            break;
        case 'GetDiaUno':
            $aulas = getDiaUno();
            print json_encode($aulas->fetch_all());
            break;
        case 'GetDiaDos':
            $aulas = getDiaDos();
            print json_encode($aulas->fetch_all());
            break;
        case 'GetDiaTres':
            $aulas = getDiaTres();
            print json_encode($aulas->fetch_all());
            break;
        case 'GetCompleto':
            $aulas = getCompleto();
            print json_encode($aulas->fetch_all());
            break;
                                
        default:
            print json_encode(0);
            break;
    }
?>

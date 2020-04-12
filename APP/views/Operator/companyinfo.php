<form action="/operator/companyinfo/?id=<?=$company['id']?>" method="post" data-fouc>


    <div class="card">
        <div class="card-header header-elements-inline">
            <h5 class="card-title">КОМПАНИЯ <?=$company['company']?></h5>
            <div class="header-elements">
                <div class="list-icons">
                    <a class="list-icons-item" data-action="collapse"></a>
                    <a class="list-icons-item" data-action="reload"></a>
                </div>
            </div>
        </div>

        <div class="table-responsive">
            <table class="table  table-bordered">
                <tbody>

                <tr>
                    <td class="wmin-md-100" ><b>Компания:</b></td>
                    <td class="wmin-md-350">
                       <b> <?=$company['company']?></b> (<?=$company['transkr']?>) <br>
                       <a href="//<?=$company['url']?>" target="_blank"><?=$company['url']?></a>
                    </td>
                </tr>

                <tr>
                    <td class="wmin-md-100" ><b>Сфера деятельности:</b></td>
                    <td class="wmin-md-350">
                         <?=tematika($company['tematika'])?> <br>
                    </td>
                </tr>


                <tr>
                    <td class="wmin-md-100"><b>О компании:</b></td>
                    <td class="wmin-md-350">
                        <?=$company['aboutcompany']?>
                    </td>
                </tr>

                <tr>
                    <td class="wmin-md-100" ><b>Продукт:</b></td>
                    <td class="wmin-md-350">
                        <b>  <?=$company['nameproduct']?> </b>
                            <br><?=$company['aboutproduct']?>
                    </td>
                </tr>


                <tr>
                    <td class="wmin-md-100" ><b>Цена продукта:</b></td>
                    <td class="wmin-md-350">
                          <?=$company['minimumprice']?> рублей

                    </td>
                </tr>



                <tr>
                    <td class="wmin-md-100" ><b>Время звонков:</b></td>
                    <td class="wmin-md-350">
                          <?=timecall($company['timecall'])?> рублей

                    </td>
                </tr>


                <tr>
                    <td class="wmin-md-100"><b>Выплата за результат:</b></td>
                    <td class="wmin-md-350">
                        <?=companytype($company['type'])?> - <b><?=$company['priceresult']?> рублей</b>

                    </td>
                </tr>

                <tr>
                    <td class="wmin-md-100" ><b>Выплата за звонки:</b></td>
                    <td class="wmin-md-350">
                        За <?=$company['mincall']?> звонков <b> <?=$company['bonuscall']?> рублей</b>
                    </td>
                </tr>




                </tbody>
            </table>


        </div>




    </div>


    <input type="hidden" name="idc"  value="<?=$company['id']?>">
    <button type="submit" class=" btn btn-success"><i class="icon-phone-plus mr-2"></i> ПОДАТЬ ЗАЯВКУ</button>


</form>
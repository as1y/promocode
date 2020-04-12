<div class="card">
    <div class="card-header header-elements-inline">
        <h5 class="card-title">Мои проекты</h5>

    </div>

    <div class="card-body">



        <table  class="table datatable-basic text-center">
            <thead>
            <tr>
                <th>Компания</th>
                <th>Продукт</th>
                <th>Цель</th>
                <th>Оплата</th>
                <th>Бонус</th>
                <th>Действие</th>

            </tr>
            </thead>


            <tbody>

            <?php foreach ($mycompanies as $key=>$val):?>

                <tr>
                    <td><?=$val['company']?></td>
                    <td class="text-center">
                        <?=obrezanie($val['nameproduct'], 70)?>
                    </td>
                    <td class="text-center">

                        <?=companytype($val['type'])?>

                    </td>
                    <td class="text-center">


                        <b> <?=$val['priceresult']?> руб.</b>

                    </td>
                    <td class="text-center">
                        За <?=$val['mincall']?> звонков <b> <?=$val['bonuscall']?> руб.</b>
                    </td>
                    <td class="text-center">

                        <a href="/operator/call/?id=<?=$val['id']?>" type="button" class="btn btn-success"><i class="icon-comment-discussion mr-2"></i>звонить</a>

                    </td>
                </tr>


            <?php endforeach;?>








            </tbody>
        </table>
    </div>


</div>



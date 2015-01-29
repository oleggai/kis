{extends file="layouts/main.tpl"}
{block name='content'}
    <table class="tg">
    <tr>
        <th class="tg-izya">Зображення</th>
        <th class="tg-izya">Найменування</th>
        <th class="tg-izya">Склад</th>
        <th class="tg-izya">Ціна</th>
    </tr>
    {foreach $products as $product}
        <tr>
            <td class="tg-s6z2" style="width: 20%;">
                <img src="{$smarty.const.URL}{$product->getImage()}" style="">
            </td>
            <td class="tg-s6z2">
                <span class="td-table">{$product->getName()}</span>
            </td>
            <td class="tg-s6z2">
                {foreach $product->getComposition() as $composition}
                    {$composition->getRaw()->getName()},
                {/foreach}
            </td>
            <td class="tg-s6z2">
                <span class="td-table">{$product->getPrice()} грн</span>
            </td>
        </tr>
    {/foreach}
</table>
{/block}
{extends file="layouts/main.tpl"}
{block name='content'}
    <table class="tg">
        <tr>
            <th class="tg-izya">ID Raw</th>
            <th class="tg-izya">Name Raw</th>
        </tr>
        {foreach $raws as $raw}
            <tr>
                <td class="tg-s6z2" style="width: 20%;">
                    {$raw->getIdRaw()}
                </td>
                <td class="tg-s6z2">
                    <span class="td-table">{$raw->getName()}</span>
                </td>
            </tr>
        {/foreach}
    </table>
{/block}
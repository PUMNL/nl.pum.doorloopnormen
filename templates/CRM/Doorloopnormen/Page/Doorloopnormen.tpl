<div class="crm-content-block crm-block">
    <div id="doorloopnormen_wrapper" class="dataTables_wrapper">
        <table id="doorloopnormen-table" class="display">
            <thead>
            <tr>
                <th class="sorting-disabled" rowspan="1" colspan="1">{ts}Label{/ts}</th>
                <th class="sorting-disabled" rowspan="1" colspan="1">{ts}Norm in days{/ts}</th>
                <th class="sorting_disabled" rowspan="1" colspan="1"></th>
            </tr>
            </thead>
            <tbody>
            {assign var="row_class" value="odd-row"}
            {foreach from=$normen key=norm_id item=norm}
                <tr id="row_{$norm.id}" class={$row_class}>
                    <td hidden="1">{$norm.id}</td>
                    <td>{$norm.label}</td>
                    <td>{$norm.norm}</td>
                    <td>
                        <a href="{crmURL p='civicrm/doorloopnormen/edit' q="reset=1&id=`$norm_id`""}">{ts}Edit{/ts}</a>
                    </td>
                </tr>
                {if $row_class eq "odd-row"}
                    {assign var="row_class" value="even-row"}
                {else}
                    {assign var="row_class" value="odd-row"}
                {/if}
            {/foreach}
            </tbody>
        </table>
    </div>
</div>

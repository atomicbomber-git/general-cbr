<template>
    <div>
        <table class="table table-sm table-striped">
            <thead class="thead thead-dark">
                <th> # </th>
                <th> Verified </th>
                <HeaderCell @update-sortedby="this.updateSortedBy" field="created_at" :sorted_by="this.sorted_by" :sort_order="this.sort_order"> Created At </HeaderCell>
                <th> Updated At </th>
            </thead>
            <tbody>
                <tr v-for="(case_record, index) in list" :key="index">
                    <td> {{ index }} </td>
                    <td> {{ case_record.verified }} </td>
                    <td> {{ case_record.created_at }} </td>
                    <td> {{ case_record.updated_at }} </td>
                </tr>
            </tbody>
        </table>

        <BootstrapPagination
            :pagination="this.pagination"
            n_max_buttons="10"/>
    </div>
</template>

<script>
    import {TableManagerMixin, BootstrapPagination, HeaderCell} from 'table-manager';

export default {
    components: { BootstrapPagination, HeaderCell },
    mixins: [TableManagerMixin]
}
</script>

<style>

</style>

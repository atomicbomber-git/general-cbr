<template>
  <div>
    <div class="table-responsive">
      <table class="table table-sm table-striped">
        <thead class="thead thead-dark">
          <th>#</th>
          <th class="text-center" v-for="feature in features" :key="feature.id">{{ feature.id }}</th>
          <th> Kendali </th>
        </thead>
        <tbody>
          <tr v-for="(case_record, index) in list" :key="index">
            <td>{{ pagination.from + index }}</td>
            <td
              v-for="feature in features"
              :key="feature.id"
              class="text-center"
              :class="{
                'table-danger': !case_record.case_record_features[feature.id],
                'text-danger': !case_record.case_record_features[feature.id],
                'table-success': case_record.case_record_features[feature.id],
                'text-success': case_record.case_record_features[feature.id]
              }"
            >
              <i v-if="case_record.case_record_features[feature.id]" class="fa fa-check"></i>
              <i v-else class="fa fa-times"></i>
            </td>
            <td>  </td>
          </tr>
        </tbody>
      </table>
    </div>

    <BootstrapPagination
      @go-to-page="this.onGotoPage"
      :pagination="this.pagination"
      n_max_buttons="10"
    />
  </div>
</template>

<script>
import {
  TableManagerMixin,
  BootstrapPagination,
  HeaderCell
} from "table-manager";

export default {
  components: { BootstrapPagination, HeaderCell },
  mixins: [TableManagerMixin],

  data() {
    return {
      features: window.features
    };
  }
};
</script>

<style>
</style>

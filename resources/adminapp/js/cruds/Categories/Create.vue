<template>
  <div class="container-fluid">
    <form @submit.prevent="submitForm">
      <div class="row">
        <div class="col-md-12">
          <div class="card">
            <div class="card-header card-header-primary card-header-icon">
              <div class="card-icon">
                <i class="material-icons">add</i>
              </div>
              <h4 class="card-title">
                {{ $t('global.create') }}
                <strong>{{ $t('cruds.category.title_singular') }}</strong>
              </h4>
            </div>
            <div class="card-body">
              <back-button></back-button>
            </div>
            <div class="card-body">
              <bootstrap-alert />
              <div class="row">
                <div class="col-md-12">
                  <div
                    class="form-group bmd-form-group"
                    :class="{
                      'has-items': entry.name,
                      'is-focused': activeField == 'name'
                    }"
                  >
                    <label class="bmd-label-floating required">{{
                      $t('cruds.category.fields.name')
                    }}</label>
                    <input
                      class="form-control"
                      type="text"
                      :value="entry.name"
                      @input="updateName"
                      @focus="focusField('name')"
                      @blur="clearFocus"
                      required
                    />
                  </div>
                  <div
                    class="form-group bmd-form-group"
                    :class="{
                      'has-items': entry.slug,
                      'is-focused': activeField == 'slug'
                    }"
                  >
                    <label class="bmd-label-floating required">{{
                      $t('cruds.category.fields.slug')
                    }}</label>
                    <input
                      class="form-control"
                      type="text"
                      :value="entry.slug"
                      @input="updateSlug"
                      @focus="focusField('slug')"
                      @blur="clearFocus"
                      required
                    />
                  </div>
                  <div
                    class="form-group bmd-form-group"
                    :class="{
                      'has-items': entry.parent_category,
                      'is-focused': activeField == 'parent_category'
                    }"
                  >
                    <label class="bmd-label-floating">{{
                      $t('cruds.category.fields.parent_category')
                    }}</label>
                    <input
                      class="form-control"
                      type="number"
                      step="1"
                      :value="entry.parent_category"
                      @input="updateParentCategory"
                      @focus="focusField('parent_category')"
                      @blur="clearFocus"
                    />
                  </div>
                  <div class="form-group">
                    <label>{{ $t('cruds.category.fields.thumbnail') }}</label>
                    <attachment
                      :route="getRoute('categories')"
                      :collection-name="'category_thumbnail'"
                      :media="entry.thumbnail"
                      :max-file-size="2"
                      :component="'pictures'"
                      :accept="'image/*'"
                      @file-uploaded="insertThumbnailFile"
                      @file-removed="removeThumbnailFile"
                      :max-files="1"
                    />
                  </div>
                  <div class="form-group">
                    <label>{{ $t('cruds.category.fields.cover_image') }}</label>
                    <attachment
                      :route="getRoute('categories')"
                      :collection-name="'category_cover_image'"
                      :media="entry.cover_image"
                      :max-file-size="2"
                      @file-uploaded="insertCoverImageFile"
                      @file-removed="removeCoverImageFile"
                      :max-files="1"
                    />
                  </div>
                </div>
              </div>
            </div>
            <div class="card-footer">
              <vue-button-spinner
                class="btn-primary"
                :status="status"
                :isLoading="loading"
                :disabled="loading"
              >
                {{ $t('global.save') }}
              </vue-button-spinner>
            </div>
          </div>
        </div>
      </div>
    </form>
  </div>
</template>

<script>
import { mapGetters, mapActions } from 'vuex'
import Attachment from '@components/Attachments/Attachment'

export default {
  components: {
    Attachment
  },
  data() {
    return {
      status: '',
      activeField: ''
    }
  },
  computed: {
    ...mapGetters('CategoriesSingle', ['entry', 'loading'])
  },
  beforeDestroy() {
    this.resetState()
  },
  methods: {
    ...mapActions('CategoriesSingle', [
      'storeData',
      'resetState',
      'setName',
      'setSlug',
      'setParentCategory',
      'insertThumbnailFile',
      'removeThumbnailFile',
      'insertCoverImageFile',
      'removeCoverImageFile'
    ]),
    updateName(e) {
      this.setName(e.target.value)
    },
    updateSlug(e) {
      this.setSlug(e.target.value)
    },
    updateParentCategory(e) {
      this.setParentCategory(e.target.value)
    },
    getRoute(name) {
      return `${axios.defaults.baseURL}${name}/media`
    },
    submitForm() {
      this.storeData()
        .then(() => {
          this.$router.push({ name: 'categories.index' })
          this.$eventHub.$emit('create-success')
        })
        .catch(error => {
          this.status = 'failed'
          _.delay(() => {
            this.status = ''
          }, 3000)
        })
    },
    focusField(name) {
      this.activeField = name
    },
    clearFocus() {
      this.activeField = ''
    }
  }
}
</script>

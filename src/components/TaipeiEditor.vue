<template>
  <div class="taipei-editor">
    <FooterEditor>
      <div>
        <p>製作人</p>
        <p>謝汶均</p>
      </div>
      <div>
        <p>網頁設計</p>
        <p>許瑋琳</p>
      </div>
      <div>
        <p>網頁製作</p>
        <p>張庭瑋</p>
      </div>
      <div>
        <p>影像</p>
        <p style="max-width:275px;">
          林俊良、徐兆玄、杜建重、余承翰、
          <br />蘇健忠、報系資料庫
        </p>
      </div>
      <div>
        <p>監製</p>
        <p>蕭衡倩</p>
      </div>
      <div>
        <p>製作單位</p>
        <p>新媒體中心、視覺設計中心、數據中心</p>
      </div>

      <div>
        <p></p>
        <p>2020.12.8</p>
      </div>
    </FooterEditor>
    <div class="question-wrapper">
      <FooterQuestionnaire href="https://www.surveycake.com/s/KpQKN" />
    </div>
  </div>
</template>

<script>
import FooterEditor from '@/components/common/footer/FooterEditor.vue'
import FooterQuestionnaire from '@/components/common/footer/FooterQuestionnaire.vue'

export default {
  name: 'TaipeiEditor',
  components: { FooterEditor, FooterQuestionnaire }
}
</script>

<style lang="scss" scoped>
.taipei-editor {
  background-color: rgb(23, 23, 23);
}
.question-wrapper {
  padding: 82px 0 123px;
}
</style>
<template>
  <div class="six-cities-editor">
    <FooterEditor>
      <div>
        <p v-if="producer.length <= 3">製作人</p>
        <p v-else>統籌製作</p>
        <p>{{ producer }}</p>
      </div>
      <div>
        <p>網頁設計</p>
        <p>許瑋琳</p>
      </div>
      <div>
        <p>網頁製作</p>
        <p>張庭瑋、周融聖</p>
      </div>
      <div>
        <p>影像</p>
        <p style="max-width: 275px">
          <span v-for="(item, i) in image" :key="item"
            >{{ image[i] }}<br
          /></span>
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
    <div>
      <FooterShare />
    </div>
    <div class="question-wrapper">
      <FooterQuestionnaire href="https://www.surveycake.com/s/KpQKN" />
    </div>
  </div>
</template>

<script>
import FooterEditor from '@/components/common/footer/FooterEditor.vue'
import FooterQuestionnaire from '@/components/common/footer/FooterQuestionnaire.vue'
import FooterShare from '@/components/common/footer/FooterShare.vue'

export default {
  name: 'SixCitiesEditor',
  props: {
    image: {
      type: Array
    },
    producer: {
      type: String,
      default: '謝汶均'
    }
  },
  components: { FooterEditor, FooterQuestionnaire, FooterShare }
}
</script>

<style lang="scss" scoped>
.six-cities-editor {
  background-color: rgb(23, 23, 23);
}
.question-wrapper {
  padding-bottom: 123px;
}
</style>

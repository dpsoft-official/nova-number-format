<template>
    <div v-if="field.asHtml" v-html="field.value"></div>
    <span v-else class="whitespace-no-wrap">{{ field.value }}</span>
</template>

<script>
import FormField from "./FormField";
export default {
    components: {FormField},
    props: ['resourceName', 'field'],
}
</script>

import {defineStore} from "pinia";
import {computed, reactive, ref, watch} from "vue";

export const useAuthStore = defineStore('auth', () => {
    const user = ref()
    const token = ref("")

    const isAuthenticated = computed(() => {
        return Boolean(user.value && (token.value !== ""))
    })

    if (localStorage.getItem("state") !== null && localStorage.getItem("state") !== undefined) {
        let state = JSON.parse(localStorage.getItem("state"))
        user.value = state.user
        token.value = state.token
    }

    return {user, token, isAuthenticated}
})
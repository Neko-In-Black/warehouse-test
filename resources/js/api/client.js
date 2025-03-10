import axios from 'axios'
import { storeToRefs } from 'pinia'
import {useAuthStore} from "@/stores/auth.js";

const client = axios.create({
    baseURL: import.meta.env.VITE_API_URL,
    headers: {
        'Content-Type': 'application/json',
        'Accept': 'application/json',
    },
})
const authStore = useAuthStore()
const { token } = storeToRefs(authStore)
client.interceptors.request.use(
    (config) => {
        if (token.value) {
            config.headers.Authorization = `Bearer ${token.value}`
        }
        return config
    },
    (error) => {
        return Promise.reject(error)
    }
)
export default client

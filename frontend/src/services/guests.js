import { http } from './config'

export default {

    guestList: () => {
        return http.get('guests')
    },

    eventList: () => {
        return http.get('events')
    },

    registerGuest: (guest) => {
        return http.post('guests/create', guest)
    },

    registerEvent: (event) => {
        return http.post('events/create', event)
    },

    deletGuest: (guest) => {
        return http.delete('/' + guest.id, {data: guest});
    }
}
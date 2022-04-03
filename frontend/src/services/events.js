import { http } from './config'

export default {
    eventList: () => {
        return http.get('events')
    },

    eventListGuest: () => {
        return http.get('guests/Show')
    },

    registerEvent: (event) => {
        return http.post('events/create', event)
    },

    deletEvent: (event) =>{
        return http.delete('/events/' + event.id, {data: event});
    }
}

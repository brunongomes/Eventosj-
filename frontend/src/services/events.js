import { http } from './config'

export default {
    eventList: () => {
        return http.get('events')
    },

    registerEvent: (event) => {
        return http.post('events/create', event)
    },

    deletEvent: (event) =>{
        return http.delete('/events/' + event.id, {data: event});
    },

    updateEvent: (event) => {
        return http.put('/events/' + event.id, event);
    },
}

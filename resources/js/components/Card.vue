<template>
    <card class="flex flex-col h-auto">
        <h3 class="text-90 font-normal text-2xl p-4">
            Upcoming US holidays
        </h3>
        <div class="overflow-hidden overflow-x-auto relative">
            <table class="table w-full">
                <tbody>
                    <tr v-for="item in getHolidays">
                        <td class="td-fit text-right pr-6 align-middle">
                        <b>{{ item.name }}</b> in {{ item.days_away }} days<br>
                        <small>{{ item.date }}</small>
                        </td>
                    </tr>
                </tbody>
            </table>
        </div>
    </card>
</template>

<script>
export default {
    props: [
        'card',

        // The following props are only available on resource detail cards...
        // 'resource',
        // 'resourceId',
        // 'resourceName',
    ],

    computed: {
        getHolidays () {
            return this.card.holidays;
        }
    },
}
</script>

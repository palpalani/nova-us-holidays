<template>
    <card class="flex flex-col items-center justify-center">
        <div class="px-3 py-3">
            <h3 class="mr-3 text-base text-80 font-bold">
                Upcoming US holidays
            </h3>
            <p>&nbsp;</p>
            <ul class="list-reset">
                <li v-for="item in getHolidays" class="text-xs text-80 leading-normal">
                    <b>{{ item.name }}</b> in {{ item.days_away }} days<br>
                    <small>{{ item.date }}</small>
                </li>
            </ul>
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

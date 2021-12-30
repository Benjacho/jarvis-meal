import {config, shallowMount} from '@vue/test-utils'
import Dashboard from "../../Pages/Dashboard";

config.global.mocks = {
    $t: () => '',
}

jest.mock('@inertiajs/inertia-vue3', () => ({
    __esModule: true,
    ...jest.requireActual('@inertiajs/inertia-vue3'), // Keep the rest of Inertia untouched!
    useForm: () => ({
        /** Return what you need **/
        /** Don't forget to mock post, put, ... methods **/
    }),
    usePage: () => ({
        props: {
            value: {
                someSharedData: 'something',
            },
        },
    }),
}))

test('Render ExampleComponent without crash', () => {
    const wrapper = shallowMount(Dashboard, {
        props: {
            otherPageProps: {}
        }
    })
    expect(wrapper).toMatchSnapshot()
    console.log(wrapper.text())
    // expect(wrapper.text()).toContain('Hi! I am ExampleComponent.')
})

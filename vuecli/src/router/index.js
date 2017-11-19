import Vue from 'vue'
import Router from 'vue-router'
import HelloWorld from '@/components/HelloWorld'
import Test from '@/components/Test'
import Test1 from '@/components/Test1'
import Test2 from '@/components/Test2'
import TestUrl from '@/components/TestUrl'
import Error from '@/components/Error'
import Counter from '@/components/Counter'

Vue.use(Router)

export default new Router({
  mode: 'history',
  routes: [
    {
      path: '/',
      name: 'HelloWorld',
      component: HelloWorld
    }, {
      path: '/test',
      name: 'Test',
      component: Test,
      alias: '/abc',
      children: [
        {
          path: 'test1',
          name: 'test1',
          component: Test1
        }, {
          path: 'test2',
          name: 'test2',
          component: Test2
        }
      ]
    }, {
      path: '/testurl/:userId(\\d+)/:userName',
      name: 'testurl',
      component: TestUrl,
      beforeEnter: (to, from, next) => {
        // console.log(to);
        // console.log(from);
        next(true);//false
      }
    }, {
      path: '/home/:userId(\\d+)/:userName',
      redirect: '/testurl/:userId(\\d+)/:userName'
    }, {
      path: '*',
      component: Error
    }, {
      path: '/counter',
      name: 'counter',
      component: Counter
    }
  ]
})
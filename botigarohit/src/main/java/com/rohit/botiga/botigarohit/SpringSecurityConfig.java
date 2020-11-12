//package com.rohit.botiga.botigarohit;
//
//
//import org.springframework.context.annotation.Configuration;
//import org.springframework.http.HttpMethod;
////import org.springframework.security.config.annotation.authentication.builders.AuthenticationManagerBuilder;
////import org.springframework.security.config.annotation.web.builders.HttpSecurity;
////import org.springframework.security.config.annotation.web.configuration.EnableWebSecurity;
////import org.springframework.security.config.annotation.web.configuration.WebSecurityConfigurerAdapter;
////import org.springframework.security.config.http.SessionCreationPolicy;
////import org.springframework.security.crypto.factory.PasswordEncoderFactories;
////import org.springframework.security.crypto.password.PasswordEncoder;
//
//
//@Configuration
//@EnableWebSecurity
//class SpringSecurityConfig extends WebSecurityConfigurerAdapter {
//    @Override
//    protected void configure(AuthenticationManagerBuilder auth) throws Exception {
//        PasswordEncoder encoder = PasswordEncoderFactories.createDelegatingPasswordEncoder();
//        auth.inMemoryAuthentication().withUser("admin").password(encoder.encode("admin"))
//                .roles("ADMIN").and().withUser("user").password(encoder.encode("user"))
//                .roles("USER");
//    }
//
//    @Override
//    protected void configure(HttpSecurity http) throws Exception {
//        http.sessionManagement().sessionCreationPolicy(SessionCreationPolicy.STATELESS)
//                .and().csrf().disable()
//                .authorizeRequests().antMatchers(HttpMethod.POST, "/login").permitAll()
//                .antMatchers(HttpMethod.GET, "/getMps").permitAll()
//                .antMatchers(HttpMethod.GET, "/getClients").permitAll()
//                .antMatchers(HttpMethod.GET, "/*").authenticated()
//                .antMatchers(HttpMethod.POST, "/*").hasRole("ADMIN")
//                .antMatchers(HttpMethod.PUT, "/*").hasRole("ADMIN")
//                .antMatchers(HttpMethod.DELETE, "/*").hasRole("ADMIN")
//                .and().httpBasic();
//    }
//}

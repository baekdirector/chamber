 [마크 다운 문법](https://gist.github.com/ihoneymon/652be052a0727ad59601)  
 SDS ACT 정신과 시간의 방 : https://github.com/SDSACT/hyperbolic_time_chamber

# 웹페이지 한번 만들어 보자
일단. 이렇게 자리를 만들어 준 Keen에가 감사에 말을 전하고..
동영상을 통해 쉽게 접근하기로 결정.
- 용어 위주의 적용 사례를 중심으로 작성예정

## 1. HTML
 Tag name | Description 
---------- | ----------
head	|문서에 대한 정보를 담고 있는 tag
body	|본문에 해당하는 tag
title	|문서의 제목에 할당
a | ` <a href="http://www.google.co.kr">A tag 활용 </a>` <br /> `<a href="http://www.google.co.kr" target="_blank">A tag 새창을 열어서 링크 </a>` <br /> `<a href="http://www.google.co.kr" target="_self">A tag 기존 창에서 열어서 링크 </a> `
list |	`<li>text</li>` <br/>	`<ul>                       //unordered list`<br/>  	`<li>html</li>` <br/>  	`	<li>css</li>`<br/>	`</ul>`<br/>	`<ol>                       //ordered list`<br/>  		`<li>html</li>`<br/>  	`	<li>css</li>`<br/>	`</ol>`
h1, h2 , h3 |	`<h1>제목을 표시 크기별로</h1>`
nav	|기계들도 정보로서의 가치를 위해웹사이트를 탐색(네이게이션)하는 정보를 표현하기 html5에 도입됨 <br/>	`<nav>`<br/> 		`<ol>                       //ordered list`<br/>		    ` <li>html</li>`<br/>		 `    <li>css</li>`<br/>	`	</ol>`<br/>	`</nav>`
header	|기계들도 정보로서의 가치를 위해 간판에 해당하는 부분이라고 명시적으로 설명할 수 있다.
article	|기계들도 정보로서의 가치를 위해 본문이라고 명시적으로 알수 있다.
img	|`<img src="https://s3-ap-northeast-2.amazonaws.com/opentutorials-user-file/course/1/5641.png"/>`
input	|type으로 button, text, checkbox 등등 입력 필드를 만들어 낼 수 있다.
div	|tag & tag를 그룹해서 css를 입히기 위해서 사용

## 2. CSS
 Tag name | Description 
---------- | ----------
style |	`<style>` <br/>`      h1 {color:red}    //   h1은 선택자(selector)` <br/> `</style>`
color, font-size 속성	| `<style>` <br/> `      h1 {color:red; font-size:10px}    //   h1은 선택자(selector)` <br/> `</style>`
선택자 중복선택|	`<style>`<br/>`      h1,h2 {color:red; font-size:10px}    //   h1은 선택자(selector)` <br/> `</style>`
h2 효과 별도|	`h1,h2 {color:red; font-size: 10px}`<br/>`      h2 {`<br/>`        text-decoration: underline;`<br/>`      }`
header밑 h1에만 테두리 효과 적용 |	`header h1 {`<br/>`        border: 1px solid red;            // header tag 밑 h1에 red border가 적용, solid 실선, dotted 점선`<br/>`      }`
id 적용, css에서 id선택|	선택은 # 을 이용해서 선택<br/>`<li id=""selected"">CSS</li>`<br/>`<script>`<br/>`   #seleted { border: red 1px solid} `<br/></script>`
border	|테두리
padding	|text(content)와 border 사이 여백
margin	|테두리와 테두리사이 간격
width	|가로 너비 조절
height	|세로 높이 조절
float	|web page layout 설정 컨텐츠들간을 나란히 배치시키는 것
class 선택	|. (점)을 이용해서 선택



## 3. Javascript


## 4. PHP

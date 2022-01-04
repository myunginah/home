
/*protfolio*/
/*
 *num : index_num
 *title : 제목
 *info : 짧은 설명글
 *date : 작업일정
 *skill : 사용스킬
 *thum : 썸네일 이미지
 *detail : 상세 설명 
*/ 
var protfolio = new Vue({
    el: '#myList',
    data: {
     list: [               
        {
            num:7,
            title:'시대에듀',
            info:'신규플레이어 적용 및 수강생 UI작업',
            date:'2021.06 ~ 2021.06(1개월)',
            skill:['html','jquery','php'],
            thum:'images/thum/player_s.png',
            detail:
                [
                   '신규 스크립트 작업 및 플레이어데이터 추가',
                   '플레이어 교체에 따른 신규UI작업',
                   '동영상스크립트 연동작업',
                   '수강생 UI작업 및 기능추가'
                ]            
        },
        {
            num:6,
            title:'시대에듀모바일',
            info:'메인,마이페이지 UI수정',
            date:'2021.12',
            skill:['html','jquery','php'],
            thum:'images/thum/sidae_mypage_mobile_s.png',
            detail:
                [
                   '구조변경 및 graph기능 추가',
                ]            
        },
        {
            num:5,
            title:'시대에듀',
            info:'마이페이지 구조변경',
            date:'2021.10 ~ 2021.11(1개월)',
            skill:['html','jquery','php'],
            thum:'images/thum/sidae_mypage_s.png',
            detail:
                [
                   '구조변경 및 기능추가',
                   '데이터 방식 변경',
                   '공통가이드 작성 및 스크립트 공통화 작업',
                ]            
        },
        {
            num:4,
            title:'시대에듀',
            info:'사이트 유지보수 및 기능개선',
            date:'2019.05 ~ 2021.12(2년 8개월)',
            skill:['html','jquery','php'],
            thum:'images/thum/no_images_s.png',
            detail:
                [
                   '신규상품관련 사이트 개설',
                   '기존 게시판 UI공통화 및 스크립트 수정',
                   '통합검색, 상품상세 등 기존페이지 구조 변경 및 기능 추가'
                ]            
        },
        {
            num:3,
            title:'시대에듀모바일',
            info:'모바일사이트 구조변경 및 기능추가',
            date:'2020.09~2020.11(3개월)',
            skill:['html','jquery','php'],
            thum:'images/thum/sidae_m_s.png',
            detail:
                [
                   '구조변경',
                   '메인, 게시판 , 회원가입 , 로그인 ,상품페이지, 결제페이지 외 다수',
                   '공통가이드 신규작업',
                ]            
        },
        {
            num:2,
            title:'시대고시기획',
            info:'브랜드사이트 개설',
            date:'2020년 3월',
            skill:['html','jquery','php'],
            thum:'images/thum/sidae_s.png',
            detail:
                [
                    '반응형사이트 작업',
                    '스크립트를 이용한 animate효과작업',
                    '게시판 데이터 불러오기 및 ui수정'
                ]
        },
        {
            num:1,
            title:'합격시대',
            info:'합격시대 온라인 모의고사 사이트 개설',
            date:'2019.07~2019.09(3개월)',
            skill:['html','jquery','php'],
            thum:'images/thum/pass_sidae_s.png',
            detail:
                [
                    '메인, 게시판페이지 , 상품페이지, 결제페이지',
                    '개발 선작업으로 인한 데이터 가져오기, 그에따른 UI작업'
                ]
        },    
        
        

      ]
    }

  })
  /*//protfolio*/

  /*work list*/

  /* //work list*/
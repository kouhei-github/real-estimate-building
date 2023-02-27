type Profile = {
  name: string
  icon: string
  userLink: string
}

interface RowType {
  profile   : Profile
  gender    : string
  phone     : string
  mail      : string
  university: string
  route     : string
  tags      : Array<string>
}

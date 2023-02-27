export type ProfileType = {
  name: string,
  image: string
  gender: string
  phone: string
  mail: string
  university: string
  root?: string
  tags: Array<string>
}

export type User = {
  id: number
  isSelect: boolean
  profile: ProfileType
  date: string
  latestMessage: string
}
